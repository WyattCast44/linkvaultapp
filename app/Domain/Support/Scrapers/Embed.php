<?php

namespace App\Domain\Support\Scrapers;

use Embed\Embed as EmbedClient;

class Embed
{
    public $data;

    public function create(string $url)
    {
        $info = EmbedClient::create($url);

        $this->data = $this->parse($info);

        return $this;
    }

    public function parse($response)
    {
        $data = collect([
            'title' => $response->title,
            'description' => $response->description,
            'url' => $response->url,
            'type' => $response->type,
            'tags' => collect($response->tags),
            'image' => $response->image,
            'image_width' => $response->imageWidth,
            'image_height' => $response->imageHeight,
            'images' => collect($response->images),
            'embed_code' => $response->code,
            'embed_width' => $response->width,
            'embed_height' => $response->height,
            'embed_aspect' => $response->aspectRatio,
            'author_name' => $response->authorName,
            'author_url' => $response->authorUrl,
            'provider_name' => $response->providerName,
            'provider_url' => $response->providerUrl,
            'provider_icon' => $response->providerIcon,
            'provider_icons' => $response->providerIcons,
            'published_date' => $response->publishedDate,
            'license' => $response->license,
            'linked_data' => $response->linkedData,
            'feeds' => $response->feeds,
        ]);

        return $data;
    }
}
