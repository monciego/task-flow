<?php

namespace App\Livewire\Notes;

use App\Livewire\Forms\NotesForm;
use Livewire\Component;

class NoteForm extends Component
{
    public NotesForm $form;

    public function save() {
        $this->form->validate();
        $this->form->createNote();
        // return $this->redirect(route("notes.index"), navigate: true);
        $this->dispatch('note-created');
        $this->form->reset();
    }
    public function render()
    {
        return view('livewire.notes.note-form');
    }
}
