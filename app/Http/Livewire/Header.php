<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $a = "priyanshu";
    public $b = ['2', '3'];
    public function render()
    {
        return view('livewire.header');
    }
}
