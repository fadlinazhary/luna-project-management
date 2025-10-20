<div class="mt-3">
    <a href="{{ route('projects') }}" class="link link--primary no-underline flex items-center gap-2">
        <x-heroicon-o-arrow-left class="w-4 h-4" /> Back to Projects
    </a>

    <section class="mt-3">
        <h1 class="text-2xl">{{ $project->name }}</h1>
    </section>


    <section class="grid grid-cols-3 mt-3 gap-3">
        <div class="bg-white shadow-sm p-4 rounded flex flex-col">
            <h1 class="text-xl">Start Date</h1>
            <div class="flex-1">
                <span class="text-lg">{{ \Carbon\Carbon::parse($project->start_date)->format('d F Y') }}</span>
            </div>
        </div>
        <div class="bg-white shadow-sm p-4 rounded flex flex-col">
            <h1 class="text-xl">End Date</h1>
            <div class="flex-1">
                <span class="text-lg">{{ \Carbon\Carbon::parse($project->end_date)->format('d F Y') }}</span>
            </div>
        </div>
        <div class="bg-white shadow-sm p-4 rounded flex flex-col">
            <h1 class="text-xl">Status</h1>
            <div class="flex-1">
                <span class="text-lg font-semibold">{{ ucwords($project->status) }}</span>
            </div>
        </div>
    </section>

    <section class="mt-3">
        <h1 class="text-xl">Activities</h1>
    </section>
</div>