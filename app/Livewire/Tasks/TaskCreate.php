<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class TaskCreate extends Component
{
    public $task_name;
    public $slug;
    public $description;
    public $status;
    public $priority;
    public $deadline;

    public function store() {
        auth()->user()->tasks()->create(
            $this->only('task_name', 'slug', 'description', 'status', 'priority', 'deadline')
        );

        return $this->redirect(route('tasks.index'),  navigate: true);
    }

    public function render()
    {
        return view('livewire.tasks.task-create')->layout('layouts.app');
    }
}
