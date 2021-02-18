<?php

namespace App\Http\Livewire\Components\Inputs;

use Livewire\Component;

class CreateLink extends Component
{
    public $newLinkUrl;

    public function createLink()
    {
        $this->validate([
            'newLinkUrl' => 'required|url'
        ]);

        $url = $this->newLinkUrl;

        $this->newLinkUrl = "";

        auth()->user()->links()->updateOrCreate([
            'url' => $url,
            'url_hash' => md5($url),
        ]);

        $this->emit('linkAdded');
    }

    public function render()
    {
        return view('livewire.components.inputs.create-link');
    }
}
