<?php

namespace App\Http\Livewire\Perkara\Modal;

use Livewire\Component;

class ModalPenyidik extends Component
{
    public $penyidik;
    
    public function mount($penyidik)
    {
        $this->penyidik = $penyidik;
    }
    public function render()
    {
        return view('livewire.perkara.modal.modal-penyidik');
    }
}