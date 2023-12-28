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
        if (empty($this->title)) {
            // Generate a default title using "untitled" and a random number
            $this->title = 'untitled' . rand(10000, 99999);
        }
        auth()->user()->notes()->create($this->all());
        request()->session()->flash('success-message', __('Note created successfuly!'));
    }
}
