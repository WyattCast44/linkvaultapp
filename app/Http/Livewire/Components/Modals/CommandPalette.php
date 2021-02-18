<?php

namespace App\Http\Livewire\Components\Modals;

use Livewire\Component;

class CommandPalette extends Component
{
    public $showCommandPalette;

    protected $listeners = ['closeModals' => 'closeModals'];

    public function mount()
    {
        $this->showCommandPalette = false;
    }

    public function closeModals()
    {
        $this->showCommandPalette = false;
    }

    public function render()
    {
        return view('livewire.components.modals.command-palette');
    }
}
