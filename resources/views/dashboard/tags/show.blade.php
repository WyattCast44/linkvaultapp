<div>
    
    <div class="max-w-3xl mx-auto">

        <div class="flex items-center justify-between my-5">
            <h2 class="text-3xl font-semibold">{{ $tag->name }}</h2>
        </div>

        <ul class="mb-8 bg-white border divide-y">
            @forelse ($links as $link)
                <li class="flex items-center justify-between p-3">
                    <a href="{{ $link->url }}" target="_blank" rel="noopener">{{ $link->url }}</a>
                    <button wire:click="unlinkTag({{ $link->id }})" class="flex items-center justify-center" title="Remove tag from link">
                        <x-icon-backspace class="w-5 h-5 text-gray-500 hover:text-gray-700" />
                    </button>
                </li>
            @empty
                <li class="p-3">
                    No links yet
                </li>
            @endforelse
        </ul>

    </div>

</div>