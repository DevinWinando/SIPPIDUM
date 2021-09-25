<?php

namespace App\Http\Livewire\Perkara\Edit\Table;

use App\Models\Jaksa as ModelJaksa;
use Livewire\Component;

class Jaksa extends Component
{
    public $jaksa;
    protected $listeners = ['editJaksa'];

    public function mount($jaksa)
    {
        $this->jaksa = $jaksa;
    }

    public function editJaksa(ModelJaksa $jaksa)
    {
        $this->jaksa->id_jaksa = $jaksa->id_jaksa;
        $this->jaksa->nama = $jaksa->nama;
        $this->jaksa->jabatan = $jaksa->jabatan;

    }
    
    public function render()
    {
        return view('livewire.perkara.edit.table.jaksa');
    }
}