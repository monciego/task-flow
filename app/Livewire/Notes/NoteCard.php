<?php

namespace App\Livewire\Notes;

use Livewire\Component;

class NoteCard extends Component
{
    public function render()
    {
        return view('livewire.notes.note-card', [
            'notes' => auth()->user()->notes
        ]);
    }
}
