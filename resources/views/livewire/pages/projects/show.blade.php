<div class="mt-3">
    <a href="{{ route('projects') }}" class="link link--primary no-underline flex items-center gap-2">
        <x-heroicon-o-arrow-left class="w-4 h-4" /> Back to Projects
    </a>

    <section class="mt-3">
        <h1 class="text-2xl">{{ $project->name }}</h1>
    </section>

    <section class="grid grid-cols-3 mt-3 gap-3">
        <div class="bg-white shadow-sm p-4 rounded flex flex-col">
            <x-heroicon-o-calendar-days class="w-6 h-6" />
            <h1 class="text-lg mt-3">Start Date</h1>
            <div class="flex-1">
                <span class="text-base">{{ $project->start_date }}</span>
            </div>
        </div>
        <div class="bg-white shadow-sm p-4 rounded flex flex-col">
            <x-heroicon-o-calendar-days class="w-6 h-6" />
            <h1 class="text-lg mt-3">Due Date</h1>
            <div class="flex-1">
                <span class="text-base">{{ $project->due_date }}</span>
            </div>
        </div>
        <div class="bg-white shadow-sm p-4 rounded flex flex-col">
            <x-heroicon-o-flag class="w-6 h-6" />
            <h1 class="text-lg mt-3">Status</h1>
            <div class="flex-1">
                <span class="text-base font-medium">{{ $project->status }}</span>
            </div>
        </div>
    </section>

    <section class="mt-3">
        <h1 class="text-xl font-semibold mb-2">Tasks</h1>
        <div class="overflow-x-auto bg-white shadow rounded-lg border border-gray-100">
            <table class="min-w-full text-sm text-gray-700">
            <thead class="bg-gray-50 border-b">
                <tr class="text-left">
                    <th class="px-4 py-3 font-medium">No.</th>
                    <th class="px-4 py-3 font-medium">Task Name</th>
                    <th class="px-4 py-3 font-medium">Priority</th>
                    <th class="px-4 py-3 font-medium">Status</th>
                    <th class="px-4 py-3 font-medium">Date</th>
                    <th class="px-4 py-3 font-medium">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($project->tasks as $task)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3">{{ $task->name }}</td>
                    <td class="px-4 py-3">{{ $task->priority !== null ? ucfirst($task->priority) : 'Not Determined' }}</td>
                    <td class="px-4 py-3">{{ $task->status }}</td>
                    <td class="px-4 py-3">{{ $task->start_date }} &mdash; {{ $task->due_date }}</td>
                    <td class="px-4 py-3">
                        <a href="{{ route('projects.edit-task', [$project, $task]) }}" class="button button--primary button--small">Edit Task</a>
                        <button class="button button--danger button--small">Delete Task</button>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td class="px-4 py-3">
                        <a href="{{ route('projects.add-task', $project) }}" class="button button--primary w-full">Add a Task</a>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </section>

</div>