<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class NotesForm extends Form
{
    public $title;
    #[Rule('required')]
    public $body;
    public $category;

    public function createNote() {
        auth()->user()->notes()->create($this->all());
        request()->session()->flash('success-message', __('Note created successfuly!'));
    }
}
