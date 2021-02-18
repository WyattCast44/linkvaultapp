<?php

namespace App\Http\Livewire\Components\Modals;

use Livewire\Component;

class CommandPalette extends Component
{
    public $commands;

    public $showCommandPalette = true;

    protected $listeners = [
        'closeModals' => 'closeModals',
        'openCommandPalette' => 'openCommandPalette'
    ];

    public function mount()
    {
        if (auth()->check()) {
            $this->commands = config('command-palette.auth');
        } else {
            $this->commands = config('command-palette.guest');
        }

        $this->showCommandPalette = false;
    }

    public function openCommandPalette()
    {
        $this->showCommandPalette = true;

        $this->emit('modal-triggered-open');
    }

    public function closeModals()
    {
        $this->showCommandPalette = false;
    }

    public function performAction($action = null, $args = null)
    {
        if (array_key_exists($action, $this->commands)) {

            if (array_key_exists('default_args', $this->commands[$action])) {
                $command = $this->commands[$action];
                return app()->make($command['handler'])->handle(...$command['default_args']);
            } else {
                return app()->make($this->commands[$action]['handler'])->handle();
            }
        }
    }

    public function render()
    {
        return view('livewire.components.modals.command-palette');
    }
}
