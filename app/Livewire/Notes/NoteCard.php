<?php

namespace App\Livewire\Notes;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class NoteCard extends Component
{
    use WithPagination;
    #[On('note-created')]
    public function render()
    {
        return view('livewire.notes.note-card', [
            'notes' => auth()->user()->notes()->paginate(4),
        ]);
    }
}
