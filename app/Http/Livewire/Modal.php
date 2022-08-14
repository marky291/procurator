<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $show = false;

    public string $forgeProcessName = '';

    protected $listeners = ['show'];

    public function show(string $type)
    {
        $this->show = true;
        $this->forgeProcessName = $type;
    }
}
