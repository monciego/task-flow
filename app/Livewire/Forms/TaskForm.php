<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class TaskForm extends Form
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

    public function createTask()
    {
        auth()->user()->tasks()->create($this->all());
        request()->session()->flash('success-message', __('Task created successfuly!'));
    }
}
