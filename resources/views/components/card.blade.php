@props([
    'title' => null,
    'icon' => null,
])

<div class="card">
    @if ($icon)
        <x-dynamic-component :component="'heroicon-'.$icon" class="card__icon" />
    @endif
    <div class="card__head">
        <h3 class="card__title">{{ $title ?? '' }}</h3>
    </div>
    <div class="card__body">
        {{ $slot }}
    </div>

    @if (isset($footer))
        <div class="card__footer">
            {{ $footer }}
        </div>
    @endif
</div>