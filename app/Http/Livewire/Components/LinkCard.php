<?php

namespace App\Http\Livewire\Components;

use App\Models\Link;
use Livewire\Component;

class LinkCard extends Component
{
    public $link;

    public function mount(Link $link)
    {
        $this->link = $link;
    }

    public function deleteLink($link)
    {
        $link = auth()->user()->links()->find($link);

        if ($link) {
            $link->delete();

            $this->emit('linkDeleted');
        }
    }

    public function render()
    {
        return view('livewire.components.link-card');
    }
}
