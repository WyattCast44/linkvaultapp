<?php

namespace App\Http\Livewire;

use App\Models\Link;
use Livewire\Component;

class LinkIndex extends Component
{
    public $links;

    public $newLink;

    public $activeLink = null;

    protected $listeners = [
        'linkAdded' => 'loadLinks',
    ];

    public function mount()
    {
        $this->loadLinks();
    }

    public function deleteLink($link)
    {
        $link = auth()->user()->links()->find($link);

        if ($link) {
            $link->delete();
            $this->loadLinks();
        }
    }

    public function loadLinks()
    {
        $this->links = auth()->user()->links()->with('tags')->get();
    }

    public function render()
    {
        return view('dashboard.links.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
