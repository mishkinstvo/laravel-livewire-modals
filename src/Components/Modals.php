<?php

namespace Bastinald\LaravelLivewireModals\Components;

use Livewire\Component;

class Modals extends Component
{
    public $alias;
    public $params = [];

    public function render()
    {
        return view('laravel-livewire-modals::modals');
    }

    #[On('showModal')]
    public function showModal($alias, ...$params)
    {
        $this->alias = $alias;
        $this->params = $params;

        $this->dispatch('showBootstrapModal');
    }

    #[On('resetModal')]
    public function resetModal()
    {
        $this->reset();
    }
}
