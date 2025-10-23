<?php

namespace App\Livewire\Pages\Projects\Tasks;

use App\Livewire\Forms\TaskForm;
use App\Models\Project;
use App\Models\Task;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Edit Task')]
class EditTask extends Component
{
    public Project $project;
    public Task $task;
    public TaskForm $form;

    public function mount(Project $project, Task $task)
    {
        abort_unless($task->project_id === $project->id, 404);
        $this->project = $project;
        $this->form->task = $task;
        $this->form->setTask($task);
    }

    public function edit()
    {
        $this->form->update();
        return $this->redirect(route('projects.show', $this->project));
    }

    public function render()
    {
        return view('livewire.pages.projects.tasks.edit-task');
    }
}
