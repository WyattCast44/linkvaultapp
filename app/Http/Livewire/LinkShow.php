<?php

namespace App\Http\Livewire;

use App\Models\Link;
use Livewire\Component;
use Illuminate\Support\Str;

class LinkShow extends Component
{
    public $tag;

    public $link;

    public $tags;

    public function mount($link)
    {
        $link = auth()->user()->links()->whereHashId($link)->first();

        if (!$link) {
            return abort(404);
        }

        $this->link = $link;

        $this->link->load(['tags']);

        $this->tags = $this->link->tags;
    }

    public function addTag()
    {
        $tag = auth()->user()->tags()->updateOrCreate([
            'name' => $this->tag,
            'slug' => Str::slug($this->tag)
        ]);

        $this->link->tags()->syncWithoutDetaching($tag->id);

        $this->tag = "";

        $this->tags = $this->link->refresh()->tags;
    }

    public function removeTag($tag)
    {
        $tag = auth()->user()->tags()->find($tag);

        if ($tag) {
            $this->link->tags()->detach($tag->id);

            $this->tags = $this->link->refresh()->tags;
        }
    }

    public function render()
    {
        return view('dashboard.links.show')
            ->extends('layouts.app')
            ->section('content');
    }
}
