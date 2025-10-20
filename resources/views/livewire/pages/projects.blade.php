<div class="mt-3">
    <h1 class="text-2xl">My Projects</h1>

    <div class="grid grid-cols-4 gap-y-6 mt-4">
        @foreach ($projects as $project)
            <x-card title="{{ $project->name }}">
                <p>{{ $project->description }}</p>

                <x-slot:footer>
                    <a href="{{ route('projects.show', ['project' => $project]) }}" class="link link--primary">Details</a>
                </x-slot:footer>
            </x-card>
        @endforeach
    </div>
</div>
