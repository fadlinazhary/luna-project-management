@props([
    'tabs' => [],
    'default' => null
])

@php
    $defaultTab = $defaultTab ?? array_key_first($tabs);
@endphp

<section class="tabs" x-data="{ activeTab: '{{ $defaultTab }}' }">
    <nav class="tabs__list">
        @foreach ($tabs as $tabKey => $tabLabel)
            <button
                 @click="activeTab = '{{ $tabKey }}'"
                class="tabs__tab"
                :class="activeTab === '{{ $tabKey }}' ? 'tabs__tab--active' : ''"
                >
                {{ $tabLabel }}
            </button>
        @endforeach
    </nav>
    <section class="tab__content">
        @foreach ($tabs as $tabKey => $tabLabel)
            <div x-show="activeTab === '{{ $tabKey }}'" x-transition>
                {!! $$tabKey !!}
            </div>
        @endforeach
    </section>
</section>