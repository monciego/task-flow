<?php

namespace App\Livewire\Notes;

use Livewire\Attributes\On;
use Livewire\Component;

class NoteCard extends Component
{
    #[On('note-created')]
    public function render()
    {
        return view('livewire.notes.note-card', [
            'notes' => auth()->user()->notes
        ]);
    }
}
