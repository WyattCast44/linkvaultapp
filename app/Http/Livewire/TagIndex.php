<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class TagIndex extends Component
{
    public $tags;

    public $newTag;

    public function mount()
    {
        $this->tags = auth()->user()->tags()->withCount('links')->get();
    }

    public function createTag()
    {
        $this->validate([
            'newTag' => ['required', 'string', 'min:2', 'max:255']
        ]);

        auth()->user()->tags()->updateOrCreate([
            'name' => $this->newTag,
            'slug' => Str::slug($this->newTag)
        ]);

        $this->newTag = "";

        $this->tags = auth()->user()->tags;
    }

    public function deleteTag($tag)
    {
        $tag = auth()->user()->tags()->find($tag);

        if ($tag) {
            $tag->delete();
            $this->tags = auth()->user()->tags;
        }
    }

    public function render()
    {
        return view('dashboard.tags.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
