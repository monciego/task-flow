<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class TaskCreate extends Component
{
    public function render()
    {
        return view('livewire.tasks.task-create')->layout('layouts.app');
    }
}
