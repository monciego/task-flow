<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Component;

class TaskCreate extends Component
{
    public TaskForm $form;
    public function store() {
        $this->form->validate();
        $this->form->createTask();
        return $this->redirect(route('tasks.index'),  navigate: true);
    }

    public function render()
    {
        return view('livewire.tasks.task-create')->layout('layouts.app');
    }
}
