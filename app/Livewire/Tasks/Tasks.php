<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class Tasks extends Component
{
    public function render()
    {
        return view('livewire.tasks.tasks', [
            'tasks' => auth()->user()->tasks
        ])->layout('layouts.app');
    }
}
