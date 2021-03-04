<li 
    tabindex="-1"
    id="link-id-{{ $link->hash_id }}" 
    wire:key="link-id-{{ $link->hash_id }}" 
    class="flex items-center justify-between p-3 outline-none focus:bg-gray-50 focus:ring-2 ring-blue-600 ring-offset-1">
    
    <div class="flex items-center space-x-3 truncate">

        @svg($link->getIconName(), "w-5 h-5 text-gray-300")
        
        <div class="space-y-2 break-words truncate">

            <a 
                rel="noopener" 
                target="_blank" 
                class="break-words" 
                href="{{ $link->url }}" 
                referrerpolicy="no-referrer" 
                title="Open link in new tab">
                
                @if ($link->hasBeenParsed())
                    {{ $link->data['title'] }}
                @else 
                    {{ $link->url }}
                @endif
                
            </a>
    
            @if ($link->tags->count() > 0)
                
                <div class="flex items-center space-x-1">
                    @foreach ($link->tags as $tag)
                        <a href="{{ route('dashboard.tags.show', $tag) }}" class="block px-2 py-1 text-xs border rounded hover:no-underline hover:bg-gray-200" title="View tag">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
    
            @endif
    
        </div>

    </div>
    

    <div class="flex items-center space-x-2">

        <button 
            aria-label="Manage link's tags"    
            title="Manage link's tags"
            class="flex items-center justify-center" >
            <x-icon-tag class="w-5 h-5 text-gray-500 hover:text-gray-700" />
        </button>
        
        <a 
            title="View link"
            aria-label="View link"
            class="flex items-center justify-center" 
            href="{{ route('dashboard.links.show', $link) }}">
            <x-icon-pencil-alt class="w-5 h-5 text-gray-500 hover:text-gray-700" />
        </a>

        <button 
            title="Delete this link"
            aria-label="Delete this link"
            wire:click="deleteLink({{ $link->id }})" class="flex items-center justify-center">
            <x-icon-trash class="w-5 h-5 text-gray-500 hover:text-gray-700" />
        </button>

    </div>
    
</li>