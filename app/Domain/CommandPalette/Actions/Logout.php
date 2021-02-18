<?php

namespace App\Domain\CommandPalette\Actions;

use Illuminate\Support\Facades\Auth;

class Logout
{
    public function handle($args = null)
    {
        Auth::logout();

        return redirect()->route('welcome');
    }
}
