<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Str;

class Dashboard extends Component
{
    public $tags;

    public $newTag;

    public $links;

    public function mount()
    {
        $this->tags = auth()->user()->tags;
        $this->links = auth()->user()->links;
    }

    public function createTag()
    {
        auth()->user()->tags()->create([
            'name' => $this->newTag,
            'slug' => Str::slug($this->newTag),
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
        return view('dashboard.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
