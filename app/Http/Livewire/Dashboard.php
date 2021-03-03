<?php

namespace App\Http\Livewire;

use App\Models\Link;
use Livewire\Component;

class Dashboard extends Component
{
    public $links;

    public $search;

    public $results;

    public function mount()
    {
        $this->links = auth()->user()->links;
    }

    public function updatedSearch()
    {
        $this->results = Link::search($this->search)
            ->where('user_id', auth()->id())
            ->get();
    }

    public function render()
    {
        return view('dashboard.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
