<div>
    
    <div class="max-w-3xl mx-auto">

        <div class="flex flex-col justify-between mx-4 my-5 space-y-3 md:flex-row md:items-center md:mx-0 md:space-y-0">
            <h2 class="text-3xl font-semibold">Your Tags ({{ $tags->count() }})</h2>
            
            <label for="tag">
                <input type="text" name="tag" id="tag" placeholder="Create tag" wire:model.lazy="newTag" wire:keydown.enter="createTag" autocomplete="off" class="w-full md:w-auto">
            </label>
        </div>

        <ul class="mb-8 bg-white border divide-y">
            
            @forelse ($tags as $tag)
            
                <li 
                    wire:key="tag-key-{{ $tag->slug . '-' . $tag->id }}"
                    class="flex items-center justify-between p-3">
                    
                    <a href="{{ route('dashboard.tags.show', $tag) }}">
                        {{ $tag->name }} ({{ $tag->links_count }})
                    </a>

                    <div class="flex items-center space-x-2">
                        
                        <a 
                            title="Edit link"
                            aria-label="Edit link"
                            class="flex items-center justify-center" 
                            href="#">
                            <x-icon-pencil-alt class="w-5 h-5 text-gray-500 hover:text-gray-700" />
                        </a>
            
                        <button 
                            title="Delete tag"
                            aria-label="Delete tag"
                            wire:click="deleteTag({{ $tag->id }})" 
                            class="flex items-center justify-center">
                            <x-icon-trash class="w-5 h-5 text-gray-500 hover:text-gray-700" />
                        </button>

                    </div>
            
                </li>

            @empty
                
                <li class="p-3">
                    No tags yet
                </li>

            @endforelse
        </ul>

    </div>

</div>