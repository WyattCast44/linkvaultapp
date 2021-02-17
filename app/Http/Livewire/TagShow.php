<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

class TagShow extends Component
{
    public $tag;

    public $links;

    public function mount(Tag $tag)
    {
        $this->tag = $tag;

        if (!auth()->user()->tags()->find($tag->id)) {
            return abort(404);
        }

        $tag->load(['links']);

        $this->links = $tag->links;
    }

    public function render()
    {
        return view('dashboard.tags.show')
            ->extends('layouts.app')
            ->section('content');
    }
}
