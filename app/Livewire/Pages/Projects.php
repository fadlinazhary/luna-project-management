<?php

namespace App\Livewire\Pages;

use App\Livewire\Forms\ProjectForm;
use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Projects extends Component
{
    public Collection $projects;
    public ProjectForm $form;

    public function mount()
    {
        $this->projects = Project::all();
    }

    public function addProject()
    {
        $this->form->store();
        session()->flash('message', 'Project has been added.');
        return $this->redirect(route('projects'));
    }

    public function render()
    {
        return view('livewire.pages.projects');
    }
}
