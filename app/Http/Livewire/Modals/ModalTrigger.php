<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;

class ModalTrigger extends Component
{
    public $listener = '';
    public $name = "";

    public function trigger()
    {
        $this->emit($this->listener);
    }

    public function render()
    {
        return <<<'blade'
            <div>
                <button wire:click='trigger'>{{$name}}</button>
            </div>
        blade;
    }
}
