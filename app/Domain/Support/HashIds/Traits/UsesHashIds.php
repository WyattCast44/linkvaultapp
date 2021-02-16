<?php

namespace App\Domain\Support\HashIds\Traits;

use App\Domain\Support\HashIds\Observers\ModelHashIdObserver;

trait UsesHashIds
{
    public static function bootUsesHashIds()
    {
        static::observe(new ModelHashIdObserver());
    }
}
