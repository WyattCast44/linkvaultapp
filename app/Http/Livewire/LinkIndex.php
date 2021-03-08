<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class LinkIndex extends Component
{
    use WithPagination;

    public $newLink;

    public $activeLink = null;

    protected $links;

    protected $listeners = [
        'linkAdded' => 'render',
        'linkDeleted' => 'render',
    ];

    public function loadLinks()
    {
        return auth()->user()->links()->with('tags')->paginate(50);
    }

    public function render()
    {
        return view('dashboard.links.index', [
            'links' => $this->loadLinks(),
        ])->extends('layouts.app')->section('content');
    }
}
