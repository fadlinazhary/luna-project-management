@props(['model' => 'open'])

<div
    x-data
    x-show="{{ $attributes->get('x-model', $model) }}"
    x-cloak
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50"
    x-transition
    @keydown.escape.window="{{ $attributes->get('x-model', $model) }} = false"
    >

    <div
        @click.outside="{{ $attributes->get('x-model', $model) }} = false"
        x-show="{{ $attributes->get('x-model', $model) }}"
        x-transition
        class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6">
        @if (isset($title))
            <div class="flex justify-between items-center mb-5">
                <h2 class="text-xl font-semibold text-gray-900">{{ $title }}</h2>
                <button class="text-gray-500 text-2xl" @click="{{ $attributes->get('x-model', $model) }} = false">&times;</button>
            </div>
        @endif

        <div>
            {{ $slot }}
        </div>

        @if (isset($footer))
            <div class="mt-6 text-right">
                {{ $footer }}
            </div>
        @endif
    </div>
</div>