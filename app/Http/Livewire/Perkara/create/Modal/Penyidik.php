<?php

namespace App\Http\Livewire\Perkara\Create\Modal;

use App\Models\Penyidik as ModelPenyidik;
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
        return view('livewire.perkara.create.modal.penyidik');
    }
}