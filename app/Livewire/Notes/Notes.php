<?php

namespace App\Livewire\Notes;

use Livewire\Component;

class Notes extends Component
{
    public function render()
    {
        return view('livewire.notes.notes', [
            'notes' => auth()->user()->notes
        ])->layout('layouts.app');
    }
}
