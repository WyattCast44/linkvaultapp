<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $links;

    public $search;

    public function mount()
    {
        $this->links = auth()->user()->links;
    }

    public function render()
    {
        return view('dashboard.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
