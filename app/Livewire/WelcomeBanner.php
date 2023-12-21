<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WelcomeBanner extends Component
{

    public $greeting = "Welcome";

    public function render()
    {
        return view('livewire.welcome-banner')->with([
            'name' => Auth::user()->name,
        ]);
    }
}
