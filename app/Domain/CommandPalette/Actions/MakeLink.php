<?php

namespace App\Domain\CommandPalette\Actions;

use App\Jobs\ProcessLink;
use Illuminate\Support\Facades\Validator;

class MakeLink
{
    public function handle($args = null)
    {
        $args = [
            'url' => $args[0],
        ];

        $validitor = Validator::make($args, [
            'url' => ['required', 'url']
        ]);

        if ($validitor->fails()) {
            return;
        }

        $link = auth()->user()->links()->updateOrCreate([
            'url' => $args['url'],
            'url_hash' => md5($args['url']),
        ]);

        ProcessLink::dispatch($link);

        return redirect()->route('dashboard.links.show', $link);
    }
}
