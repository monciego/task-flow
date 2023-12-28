<?php

namespace App\Livewire\Notes;

use Livewire\Component;

class NoteCard extends Component
{
    public $notes;

    public function mount($notes) {
        $this->notes = $notes;
    }
    public function render()
    {
        return view('livewire.notes.note-card');
    }
}
