<?php

namespace App\Domain\CommandPalette\Actions;

class NavigateToPage
{
    public function handle($route, $args = null)
    {
        if ($args) {
            return redirect()->route($route, $args);
        } else {
            return redirect()->route($route);
        }
    }
}
