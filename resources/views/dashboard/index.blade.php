<div>
    
    <div class="max-w-3xl mx-auto">

        <div class="flex items-center justify-between my-5">
            <h2 class="text-3xl font-semibold">Your Tags</h2>
            
            <label for="tag">
                <input type="text" name="tag" id="tag" placeholder="Create tag" wire:model="newTag" wire:keydown.enter="createTag">
            </label>
        </div>

        <ul class="mb-8 border divide-y">
            @forelse ($tags as $tag)
                <li class="flex items-center justify-between p-3">
                    <p>{{ $tag->name }}</p>
                    <button wire:click="deleteTag({{ $tag->id }})" class="flex items-center justify-center">
                        <x-icon-trash class="w-4 h-4 text-gray-500 hover:text-gray-700" />
                    </button>
                </li>
            @empty
                <li class="p-3">
                    No tags yet
                </li>
            @endforelse
        </ul>

        <div class="flex items-center justify-between my-5">
            <h2 class="text-3xl font-semibold">Your Links</h2>
            
            <label for="url">
                <input type="url" name="url" id="url" placeholder="Create link">
            </label>
        </div>

        <ul class="mb-8 border divide-y">
            @forelse ($links as $link)
                <li class="p-3">
                    {{ $link->url }}
                </li>
            @empty
                <li class="p-3">
                    No links yet
                </li>
            @endforelse
        </ul>

    </div>

</div>