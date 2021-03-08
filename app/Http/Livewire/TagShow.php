<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

class TagShow extends Component
{
    public $tag;

    public $links;

    protected $listeners = [
        'linkDeleted' => 'loadLinks',
    ];

    public function mount(Tag $tag)
    {
        if (!auth()->user()->tags()->find($tag->id)) {
            return abort(404);
        }

        $this->tag = $tag;

        $this->loadLinks();
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

    public function loadLinks()
    {
        $this->tag->load(['links']);

        $this->tag->loadCount('links');
    }

    public function render()
    {
        return view('dashboard.tags.show')
            ->extends('layouts.app')
            ->section('content');
    }
}
