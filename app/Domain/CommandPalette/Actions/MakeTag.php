<?php

namespace App\Domain\CommandPalette\Actions;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MakeTag
{
    public function handle($args = null)
    {
        $args = [
            'name' => $args,
        ];

        $valid = Validator::make($args, [
            'name.*' => ['string', 'required']
        ]);

        if ($valid->fails()) {
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
