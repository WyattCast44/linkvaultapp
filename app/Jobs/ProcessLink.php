<?php

namespace App\Jobs;

use App\Models\Link;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\Domain\Support\Scrapers\Embed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProcessLink implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $link;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Link $link)
    {
        $this->link = $link;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Embed $client)
    {
        $embed = $client->create($this->link->url);

        $this->link->data = $embed->data->toArray();

        $this->link->save();
    }
}
