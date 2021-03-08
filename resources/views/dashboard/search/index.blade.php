<div>

    <div class="max-w-3xl mx-4 my-10 lg:my-12 lg:mx-auto">
        
        <div class="flex flex-col flex-1 space-y-4">

            <label for="search" class="text-2xl font-bold text-center">
                Search
            </label>
            
            <input 
                id="search"     
                type="search" 
                name="search" 
                autocomplete="off"
                spellcheck="false"
                wire:model="query"
                placeholder="Search your link vault">

        </div>

        @if ($tags->count() > 0)
            
        <div class="flex flex-wrap my-5 space-x-1 space-y-1">
            @foreach ($tags as $tag)
                <button type="button" class="flex items-center justify-center px-2 py-1 text-sm transition duration-100 bg-white border rounded hover:no-underline hover:bg-indigo-300 whitespace-nowrap" title="Apply tag filter" wire:click="toggleTagFilter({{ $tag->id }})">
                    {{ $tag->name }}

                    <div class="flex items-center justify-center ml-1">
                        @if (in_array($tag->slug, $activeTags))
                            <x-icon-x class="w-3 h-3" />
                        @endif
                    </div>

                </button>
            @endforeach
        </div>
        @endif

    </div>

    <div class="max-w-3xl mx-4 my-10 lg:my-16 lg:mx-auto">

        @if ($results)
            
            <ul class="mb-8 bg-white border divide-y">

                @foreach ($results as $link)
                    
                    <livewire:components.link-card :link="$link" :key="$link->hash_id" />

                @endforeach
                
            </ul>

        @endif
        

    </div>

</div>