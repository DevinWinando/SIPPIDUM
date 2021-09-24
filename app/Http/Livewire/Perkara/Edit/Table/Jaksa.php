<?php

namespace App\Http\Livewire\Perkara\Edit\Table;

use Livewire\Component;

class Jaksa extends Component
{
    public $perkara;
    public function mount($perkara)
    {
        $this->perkara = $perkara;
    }
    
    public function render()
    {
        return view('livewire.perkara.edit.table.jaksa');
    }
}