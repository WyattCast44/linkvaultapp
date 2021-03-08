<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class LinkIndex extends Component
{
    use WithPagination;

    public $newLink;

    public $activeLink = null;

    protected $listeners = [
        'linkAdded' => 'loadLinks',
    ];

    public function deleteLink($link)
    {
        $link = auth()->user()->links()->find($link);

        if ($link) {
            $link->delete();
        }
    }

    public function render()
    {
        return view('dashboard.links.index', [
            'links' => auth()->user()->links()->with('tags')->paginate(50),
        ])->extends('layouts.app')->section('content');
    }
}
