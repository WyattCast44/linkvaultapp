<div>
    
    <div class="max-w-3xl mx-auto">

        <div class="flex items-center justify-between my-5">
            <h2 class="text-3xl font-semibold">Your Links</h2>
        </div>

        <ul class="mb-8 bg-white border divide-y">
            @forelse ($links as $link)
                <li class="flex items-center justify-between p-3">
                    
                    <div class="space-y-2 truncate">
                        <a href="{{ $link->url }}" target="_blank" referrerpolicy="no-referrer" rel="noopener" class="truncate">
                            {{ $link->url }}
                        </a>

                        @if ($link->tags->count() > 0)
                            
                            <div class="flex items-center space-x-1">
                                @foreach ($link->tags as $tag)
                                    <a href="{{ route('dashboard.tags.show', $tag) }}" class="block px-2 py-1 text-xs border rounded hover:no-underline hover:bg-gray-200">
                                        {{ $tag->name }}
                                    </a>
                                @endforeach
                            </div>

                        @endif

                        
                    </div>

                    <div class="flex items-center space-x-2">

                        <a href="{{ route('dashboard.links.show', $link) }}" class="flex items-center justify-center">
                            <x-icon-eye class="w-5 h-5 text-gray-500 hover:text-gray-700" />
                        </a>
                        <button wire:click="deleteLink({{ $link->id }})" class="flex items-center justify-center">
                            <x-icon-trash class="w-5 h-5 text-gray-500 hover:text-gray-700" />
                        </button>

                    </div>
                    
                </li>
            @empty
                <li class="p-3">
                    No links yet
                </li>
            @endforelse
        </ul>

    </div>

</div>