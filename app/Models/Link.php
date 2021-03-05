<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
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
            'twitter' => 'twitter',
            'github' => 'github',
            'gitlab' => 'gitlab',
            'podcast' => 'mic',
            'earth' => 'earth',
            'codepen' => 'codepen',
        ];

        $type = (isset($this->data['type'])) ? $this->data['type'] : 'link';

        if (isset($this->data['provider_name'])) {
            switch ($this->data['provider_name']) {
                case 'YouTube':
                    $type = 'youtube';
                    break;
                case 'Twitter':
                    $type = 'twitter';
                    break;
                case 'GitHub':
                    $type = 'github';
                    break;
                case 'Apple Podcasts':
                    $type = 'podcast';
                    break;
                case 'Google Maps':
                    $type = 'earth';
                    break;
                default:
                    $type = $type;
                    break;
            }
        } else {
            $type = (Str::startsWith($this->url, ['https://codepen.io/', 'http://codepen.io/']) == "Codepen") ? 'codepen' : $type;
        }

        return Arr::get($icons, $type, 'link');
    }
}
