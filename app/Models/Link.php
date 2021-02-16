<?php

namespace App\Models;

use App\Domain\Support\HashIds\Traits\UsesHashIds;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory, UsesHashIds;

    public $guarded  = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
