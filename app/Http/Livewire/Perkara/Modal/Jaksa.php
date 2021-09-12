<?php

namespace App\Http\Livewire\Perkara\Modal;

use Livewire\Component;

class Jaksa extends Component
{
    public $jaksa;
    
    public function mount($jaksa)
    {
        $this->jaksa = $jaksa;
    }

    public function render()
    {
        return view('livewire.perkara.modal.jaksa');
    }
}