<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LinkIndex extends Component
{
    public $links;

    public $newLink;

    public function mount()
    {
        $this->links = auth()->user()->links;
    }

    public function createLink()
    {
        $this->validate([
            'newLink' => 'required|url'
        ]);

        $url = $this->newLink;

        $this->newLink = "";

        auth()->user()->links()->updateOrCreate([
            'url' => $url,
            'url_hash' => md5($url),
        ]);

        $this->links = auth()->user()->links;
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
