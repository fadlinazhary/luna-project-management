<div>
    <h1 class="text-2xl font-mono">This is counter!</h1>
    <p class="text-lg">{{ $count }}</p>

    <button wire:click="increment" class="px-10 bg-blue-400">+</button>
    <button wire:click="decrement" class="px-10 bg-blue-400">-</button>
</div>
