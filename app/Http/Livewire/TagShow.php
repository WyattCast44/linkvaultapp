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
        if (!auth()->user()->tags()->find($tag->id)) {
            return abort(404);
        }

        $this->tag = $tag;

        $this->tag->load(['links']);

        $this->tag->loadCount('links');
    }

    public function deleteLink($link)
    {
        $link = auth()->user()->links()->find($link);

        if ($link) {
            $link->tags()->detach($this->tag->id);
            $this->tag->loadCount('links');
            $this->tag->load('links');
        }
    }

    public function render()
    {
        return view('dashboard.tags.show')
            ->extends('layouts.app')
            ->section('content');
    }
}
