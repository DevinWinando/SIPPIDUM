<?php

namespace App\Http\Livewire\Perkara\Create\Table;

use App\Models\Jaksa as ModelJaksa;
use Livewire\Component;

class Jaksa extends Component
{
    public $id_jaksa;
    public $nama;
    public $nip;
    public $jabatan;
    public $iteration;
    
    protected $listeners = [
        'showJaksa'
    ];

    public function showJaksa(ModelJaksa $jaksa)
    {
        $this->id_jaksa = $jaksa['id_jaksa'];
        $this->nama = $jaksa['nama'];
        $this->nip = $jaksa['nip'];
        $this->jabatan = $jaksa['jabatan'];
        $this->iteration = 1;
    }
    public function render()
    {
        return view('livewire.perkara.create.table.jaksa');
    }
}