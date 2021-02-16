<?php

namespace App\Domain\Support\HashIds\Observers;

use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Database\Eloquent\Model;

class ModelHashIdObserver
{
    public function created(Model $model)
    {
        $model->update([
            'hash_id' => Hashids::encode($model->id),
        ]);
    }
}
