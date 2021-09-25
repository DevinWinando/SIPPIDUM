<?php

namespace App\Http\Livewire\Perkara\Edit\Table;

use App\Models\Penyidik as ModelPenyidik;
use Livewire\Component;

class Penyidik extends Component
{
    public $penyidik;

    protected $listeners = ['editPenyidik'];

    public function editPenyidik(ModelPenyidik $penyidik)
    {
        $this->penyidik->id_penyidik = $penyidik->id_penyidik;
        $this->penyidik->instansi = $penyidik->instansi;
        $this->penyidik->alamat = $penyidik->alamat;
    }

    public function mount($penyidik)
    {
        $this->penyidik = $penyidik;
    }
    public function render()
    {
        return view('livewire.perkara.edit.table.penyidik');
    }
}