<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Domain\Support\HashIds\Traits\UsesHashIds;
use Spatie\SchemalessAttributes\SchemalessAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Link extends Model
{
    use HasFactory, UsesHashIds, Searchable;

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

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        return [
            'url' => $this->url,
            'data' => $this->data,
            'user_id' => $this->user_id,
            'hash_id' => $this->hash_id,
        ];
    }

    public function getIconName()
    {
        $icons = [
            'video' => 'film',
            'link' => 'link',
            'youtube' => 'youtube',
        ];

        $type = (isset($this->data['type'])) ? $this->data['type'] : 'link';

        $type = (isset($this->data['provider_name']) && $this->data['provider_name'] == "YouTube") ? 'youtube' : $type;

        $icon = Arr::get($icons, $type, 'link');

        return $icon;
    }
}
