<?php

namespace App\Http\Livewire;

use App\Models\Link;
use Livewire\Component;

class Dashboard extends Component
{
    public $search;

    public $results = null;

    protected $listeners = [
        'linkDeleted' => 'render',
    ];

    public function updatedSearch()
    {
        if ($this->search != "") {
            $this->results = Link::search($this->search)
                ->where('user_id', auth()->id())
                ->get();
        } else {
            $this->results = null;
        }
    }

    public function render()
    {
        return view('dashboard.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
