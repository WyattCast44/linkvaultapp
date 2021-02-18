<?php

namespace App\Domain\CommandPalette\Actions;

class NavigateToTagPage
{
    public function handle($args = null)
    {
        $tag = auth()->user()->tags()->where('name', $args)->first();

        if ($tag) {
            return redirect()->route('dashboard.tags.show', $tag);
        } else {
            return redirect()->route('dashboard.tags.index');
        }
    }
}
