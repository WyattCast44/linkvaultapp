<div>
    
    <div class="max-w-3xl mx-auto">

        <div class="flex items-center justify-between my-5">
            <h2 class="text-3xl font-semibold">{{ $tag->name }}</h2>
        </div>

        <ul class="mb-8 border divide-y">
            @forelse ($links as $link)
                <li class="flex items-center justify-between p-3">
                    <a href="{{ $link->url }}" target="_blank" rel="noopener">{{ $link->url }}</a>
                </li>
            @empty
                <li class="p-3">
                    No links yet
                </li>
            @endforelse
        </ul>

    </div>

</div>