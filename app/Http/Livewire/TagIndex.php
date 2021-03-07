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
        $this->loadTags();
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

        $this->loadTags();
    }

    public function deleteTag($tag)
    {
        $tag = auth()->user()->tags()->find($tag);

        if ($tag) {
            $tag->delete();
            $this->loadTags();
        }
    }

    public function loadTags()
    {
        $this->tags = auth()->user()->tags()->withCount('links')->get();
    }

    public function render()
    {
        return view('dashboard.tags.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
