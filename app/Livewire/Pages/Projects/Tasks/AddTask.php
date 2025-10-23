<?php

namespace App\Livewire\Pages\Projects\Tasks;

use App\Livewire\Forms\TaskForm;
use App\Models\Project;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Add a new Task')]
class AddTask extends Component
{
    public Project $project;
    public TaskForm $form;

    public function mount(Project $project)
    {
        $this->project = $project;
    }

    public function add()
    {
        $this->form->store($this->project);

        session()->flash('message', 'Successfully added a new task.');
        return $this->redirect(route('projects.show', $this->project));
    }

    public function render()
    {
        return view('livewire.pages.projects.tasks.add-task');
    }
}
