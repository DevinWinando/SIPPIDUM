<?php

namespace App\Http\Livewire\Perkara\Edit\Modal;

use Livewire\Component;

class Penyidik extends Component
{
    public $penyidik;

    public function mount($penyidik)
    {
        $this->penyidik = $penyidik;
    }
    public function render()
    {
        return view('livewire.perkara.edit.modal.penyidik');
    }
}