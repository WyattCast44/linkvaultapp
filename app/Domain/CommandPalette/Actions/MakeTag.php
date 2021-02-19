<?php

namespace App\Domain\CommandPalette\Actions;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class MakeTag
{
    public function handle($args = null)
    {
        $args = [
            'name' => $args,
        ];

        $validitor = Validator::make($args, [
            'name.*' => ['string', 'required']
        ]);

        if ($validitor->fails()) {
            return;
        }

        $name = implode(' ', $args['name']);

        $tag = auth()->user()->tags()->updateOrCreate([
            'name' => $name,
            'slug' => Str::slug($name)
        ]);

        return redirect()->route('dashboard.tags.show', $tag);
    }
}
