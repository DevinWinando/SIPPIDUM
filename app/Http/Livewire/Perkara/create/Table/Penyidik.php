<?php

namespace App\Http\Livewire\Perkara\Create\Table;

use App\Models\Penyidik as ModelPenyidik;
use Livewire\Component;

class Penyidik extends Component
{
    public $id_penyidik;
    public $instansi;
    public $alamat;
    public $iteration;

    protected $listeners = [
        'showPenyidik'
    ];

    public function showPenyidik(ModelPenyidik $penyidik)
    {
        $this->id_penyidik = $penyidik['id_penyidik'];
        $this->instansi = $penyidik['instansi'];
        $this->alamat = $penyidik['alamat'];
        $this->iteration = 1;
    }

    public function render()
    {
        return view('livewire.perkara.create.table.penyidik');
    }
}