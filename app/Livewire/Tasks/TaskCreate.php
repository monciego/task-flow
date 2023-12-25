<?php

namespace App\Livewire\Tasks;

use Livewire\Attributes\Rule;
use Livewire\Component;

class TaskCreate extends Component
{
    #[Rule('required|min:5')]
    public $task_name;
    #[Rule('required|min:5')]
    public $slug;
    #[Rule('required|min:20')]
    public $description;
    #[Rule('required')]
    public $status;
    #[Rule('required')]
    public $priority;
    #[Rule('required')]
    public $deadline;

    public function store() {
        $this->validate();
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
