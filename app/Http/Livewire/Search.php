<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\Link;
use Livewire\Component;

class Search extends Component
{
    public $tags;

    public $query = '';

    public $filter = 'tweets';

    public $results = null;

    protected $listeners = [
        'linkDeleted' => 'render',
    ];

    public $activeTags = [];

    public function mount()
    {
        $this->tags = auth()->user()->tags;

        $this->results = auth()->user()->links()->latest()->take(10)->get();
    }

    public function toggleTagFilter($tag)
    {
        $tag = auth()->user()->tags()->find($tag);

        if ($tag) {
            if (in_array($tag->slug, $this->activeTags)) {
                $this->activeTags = array_diff($this->activeTags, [$tag->slug]);
            } else {
                array_push($this->activeTags, $tag->slug);
            }
        }

        if (count($this->activeTags) > 0) {

            $links = Link::query()
                ->where('user_id', auth()->id())
                ->whereHas('tags', function ($query) {
                    $query->where('slug', $this->activeTags);
                })->get();

            $this->results = $links->intersect($this->results);
        } else {
            if ($this->query != "") {
                $this->results = Link::search($this->query)
                    ->where('user_id', auth()->id())
                    ->get();

                $links = Link::query()
                    ->where('user_id', auth()->id())
                    ->whereHas('tags', function ($query) {
                        $query->where('slug', $this->activeTags);
                    })->get();

                $this->results = $links->intersect($this->results);
            } else {
                $this->results = auth()->user()->links()->latest()->take(10)->get();
            }
        }
    }

    public function updatedQuery()
    {
        if ($this->query != "") {
            $this->results = Link::search($this->query)
                ->where('user_id', auth()->id())
                ->get();

            $links = Link::query()
                ->where('user_id', auth()->id())
                ->whereHas('tags', function ($query) {
                    $query->where('slug', $this->activeTags);
                })->get();

            $this->results = $links->intersect($this->results);
        } else {
            $this->results = auth()->user()->links()->latest()->take(10)->get();
        }
    }

    public function render()
    {
        return view('dashboard.search.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
