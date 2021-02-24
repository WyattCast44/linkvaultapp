<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Domain\Support\HashIds\Traits\UsesHashIds;
use Spatie\SchemalessAttributes\SchemalessAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Link extends Model
{
    use HasFactory, UsesHashIds;

    public $guarded  = [];

    public $casts = [
        'data' => 'array',
    ];

    public function getRouteKeyName()
    {
        return 'hash_id';
    }
    public function hasBeenParsed()
    {
        return ($this->parsed_at) ? true : false;
    }

    public function getExtraAttributesAttribute(): SchemalessAttributes
    {
        return SchemalessAttributes::createForModel($this, 'data');
    }

    public function scopeWithExtraAttributes(): Builder
    {
        return SchemalessAttributes::scopeWithSchemalessAttributes('data');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
