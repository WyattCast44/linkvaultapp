<div>

    <div class="max-w-3xl mx-4 my-10 lg:my-16 lg:mx-auto">
        
        <div class="flex flex-col flex-1 space-y-4">

            <label for="search" class="text-2xl font-bold text-center">
                {{ config('app.name') }}
            </label>
            
            <input 
                id="search"     
                type="search" 
                name="search" 
                autocomplete="off"
                spellcheck="false"
                wire:model="search"
                placeholder="Search Linkvault">

        </div>

    </div>

    <div class="max-w-3xl mx-4 my-10 lg:my-16 lg:mx-auto">

        @if ($results)
            
            <ul class="mb-8 bg-white border divide-y">

                @foreach ($results as $link)
                    <li 
                        tabindex="-1"
                        id="link-id-{{ $link->hash_id }}" 
                        wire:key="link-id-{{ $link->hash_id }}"
                        class="flex items-center justify-between p-3 outline-none focus:bg-gray-50 focus:ring-2 ring-blue-600 ring-offset-1">
                        
                        <div class="space-y-2 truncate">

                            <a href="{{ $link->url }}" target="_blank" referrerpolicy="no-referrer" rel="noopener" class="truncate" title="Open link in new tab">
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
                                    
                    </li>

                @endforeach
                
            </ul>

        @endif
        

    </div>

</div>