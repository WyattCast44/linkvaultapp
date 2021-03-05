<li 
    tabindex="-1"
    id="link-id-{{ $link->hash_id }}" 
    wire:key="link-id-{{ $link->hash_id }}" 
    class="flex items-center justify-between outline-none focus:bg-gray-50 focus:ring-2 ring-blue-600 ring-offset-1">
    
    <!-- Icon -->
    <div class="px-5 py-4">
        @svg($link->getIconName(), "w-5 h-5 text-gray-400")
    </div>

    <!-- Details -->
    <div class="flex flex-col flex-1 p-3 overflow-hidden border-l md:flex-row md:justify-between">

        <div class="flex flex-col">

            @isset($link->data['provider_name'])
                <span class="text-xs text-gray-500 truncate">
                    {{ Str::title($link->data['provider_name']) }}
                </span>
            @endisset

            <div>
                <a 
                    rel="noopener" 
                    target="_blank" 
                    class="break-words" 
                    href="{{ $link->url }}" 
                    referrerpolicy="no-referrer" 
                    title="Open link in new tab">
                    
                    @if ($link->hasBeenParsed())
                        {{ Str::limit($link->data['title'], 112) }}
                    @else 
                        {{ $link->url }}
                    @endif
                    
                </a>
            </div>
    
            @if ($link->tags->count() > 0)
                    
                <div class="flex items-center mt-1 space-x-1 overflow-x-scroll md:overflow-hidden">
                    @foreach ($link->tags as $tag)
                        <a href="{{ route('dashboard.tags.show', $tag) }}" class="flex items-center justify-center px-2 py-1 text-xs border rounded hover:no-underline hover:bg-gray-200 whitespace-nowrap" title="View tag">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                    <button
                        title="Add tag to link"
                        aria-label="Add tag to link"
                        class="py-1 px-1.5 text-xs border rounded hover:bg-gray-200 text-blue-600 flex items-center justify-center">
                        <x-icon-plus class="w-4 h-4" />
                    </button>
                </div>
    
            @endif

        </div>

        <!-- Actions -->
        <div class="flex items-center justify-end pt-3 space-x-2 md:p-3 md:border-none">
            
            {{-- <button 
                aria-label="Manage link's tags"    
                title="Manage link's tags"
                class="flex items-center justify-center" >
                <x-icon-tag class="w-5 h-5 text-gray-500 hover:text-gray-700" />
            </button> --}}
            
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

    </div>
    
</li>