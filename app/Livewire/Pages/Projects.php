<?php

namespace App\Livewire\Pages;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Projects extends Component
{
    public Collection $projects;

    public function mount()
    {
        $this->projects = Project::all();
    }

    public function render()
    {
        return view('livewire.pages.projects');
    }
}
