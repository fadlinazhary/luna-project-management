<?php

namespace App\Livewire\Forms;

use App\Models\Project;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProjectForm extends Form
{
    public ?Project $project;

    public string $name;
    public string $description;
    public string $start_date;
    public string $due_date;

    protected function rules(): array
    {
        return [
            'name' => ['required'],
            'description' => ['required'],
            'start_date' => ['required', 'date'],
            'due_date' => ['required', 'date'],
        ];
    }

    public function store()
    {
        $this->validate();

        Project::create($this->all());

        // $this->reset();
    }
}
