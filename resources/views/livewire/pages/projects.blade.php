<div class="mt-3">
    <h1 class="text-2xl">My Projects</h1>

    <div class="grid grid-cols-4 gap-y-6 mt-4">
        @foreach ($projects as $project)
            <x-card title="{{ $project->name }}">
                <p>{{ $project->description }}</p>

                <x-slot:footer>
                    <a href="{{ route('projects.show', $project) }}" class="link link--primary">Details</a>
                </x-slot:footer>
            </x-card>
        @endforeach
    </div>

    <div x-data="{ openModal: false }">
        <button type="button" class="group fixed flex items-center right-6 bottom-6 button p-3 rounded-full" @click="openModal = true">
            <x-heroicon-o-plus class="w-6 h-6" /> <span class="text-base font-medium hidden group-hover:block">Add New Project</span>
        </button>

        <x-modal x-model="openModal">
            <x-slot name="title">Add a New Project</x-slot>

            <form wire:submit.prevent="addProject">
                <div class="form-group">
                    <label for="name" class="form-group__label">Name</label>
                    <input type="text" wire:model="form.name" id="name" class="form-group__input" />
                </div>
                <div class="form-group">
                    <label for="description" class="form-group__label">Description</label>
                    <textarea wire:model="form.description" id="description" cols="30" rows="5" class="form-group__textarea"></textarea>
                </div>
                <div class="form-group">
                    <label for="start_date" class="form-group__label">Start Date</label>
                    <input type="date" wire:model="form.start_date" id="start_date" class="form-group__input" />
                </div>
                <div class="form-group">
                    <label for="due_date" class="form-group__label">Due Date</label>
                    <input type="date" wire:model="form.due_date" id="due_date" class="form-group__input" />
                </div>
                <button type="submit" class="button button--primary">Submit</button>
            </form>

            <x-slot name="footer">
                <button @click="openModal = false" class="button">Cancel</button>
            </x-slot>
        </x-modal>
    </div>
</div>
