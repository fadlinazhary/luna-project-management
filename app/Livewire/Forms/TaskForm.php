<?php

namespace App\Livewire\Forms;

use Carbon\Carbon;
use App\Models\Project;
use App\Models\Task;
use Livewire\Form;

class TaskForm extends Form
{
    public ?Task $task;

    // Form Data
    public string $name;
    public string $description;
    public ?string $priority;
    public string $start_date;
    public string $due_date;

    protected function rules()
    {
        return [
            'name' => ['required'],
            'description' => ['required'],
            'priority' => ['required'],
            'start_date' => ['required', 'date'],
            'due_date' => ['required', 'date'],
        ];
    }

    public function setTask(Task $task): void
    {
        $this->name = $task->name;
        $this->description = $task->description;
        $this->priority = $task->priority;
        $this->start_date = Carbon::parse($task->start_date)->format('Y-m-d');
        $this->due_date = Carbon::parse($task->due_date)->format('Y-m-d');
    }

    public function store(Project $project): void
    {
        $this->validate();
        
        $project->tasks()->create($this->all());

        $this->reset();
    }

    public function update(): void
    {
        $this->validate();

        $this->task->update($this->all());
    }

    // public function delete(): void
    // {
    //     $this->task->delete();
    // }
}
