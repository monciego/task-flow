<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class Tasks extends Component
{
    public $tasks = [];
    public $task = "";

    public function addTask() {
        $this->tasks[] = $this->task;

        // $this->task = '';
        $this->reset('task');
    }

    public function mount() {
        $this->tasks = ["Complete Project Proposal", "Design User Interface", "Implement Livewire Features"];
    }
    public function render()
    {
        return view('livewire.tasks.tasks')->layout('layouts.app');
    }
}
