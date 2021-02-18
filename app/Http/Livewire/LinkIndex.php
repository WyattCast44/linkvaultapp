<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LinkIndex extends Component
{
    public $links;

    public $newLink;

    public $activeLink = null;

    protected $listeners = [
        'linkAdded' => 'updateLinks',
        'move-focus' => 'moveFocusToNextLink'
    ];

    public function mount()
    {
        $this->links = auth()->user()->links;
    }

    public function updateLinks()
    {
        $this->links = auth()->user()->refresh()->links;
    }

    public function moveFocusToNextLink()
    {
        if ($this->activeLink == null) {
            $this->activeLink = $this->links->first();
        } else {
            $keys = collect($this->links->modelKeys());

            $index = $keys->search($this->activeLink->id);

            if (array_key_exists($index + 1, $keys->toArray())) {
                $this->activeLink = $this->links->find($keys[$index + 1]);
            } else {
                $this->activeLink = $this->links->first();
            }
        }

        $this->emit('move-focus-to-next-link', "#link-id-" . $this->activeLink->hash_id);
    }

    public function deleteLink($link)
    {
        $link = auth()->user()->links()->find($link);

        if ($link) {
            $link->delete();
            $this->links = auth()->user()->links;
        }
    }

    public function render()
    {
        return view('dashboard.links.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
