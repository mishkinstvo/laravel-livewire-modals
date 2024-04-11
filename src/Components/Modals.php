<?php

namespace Bastinald\LaravelLivewireModals\Components;

use Livewire\Component;
use Livewire\Attributes\On;

class Modals extends Component
{
    public $alias, $size, $activeModal;
    public $params = [];

    public function render()
    {
        return view('laravel-livewire-modals::modals');
    }

    #[On('showModal')]
    public function showModal($alias, $size = 'modal-lg', ...$params)
    {
        $this->alias = $alias;
        $this->size = $size;
        $this->params = $params;
        $this->activeModal = "modal-id-" . rand();

        $this->dispatch('showBootstrapModal');
    }

    #[On('resetModal')]
    public function resetModal()
    {
        $this->reset();
    }
}
