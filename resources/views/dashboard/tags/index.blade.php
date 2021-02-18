<div>
    
    <div class="max-w-3xl mx-auto">

        <div class="flex items-center justify-between my-5">
            <h2 class="text-3xl font-semibold">Your Tags</h2>
            
            <label for="tag">
                <input type="text" name="tag" id="tag" placeholder="Create tag" wire:model="newTag" wire:keydown.enter="createTag" autocomplete="off">
            </label>
        </div>

        <ul class="mb-8 bg-white border divide-y">
            @forelse ($tags as $tag)
                <li class="flex items-center justify-between p-3">
                    <a href="{{ route('dashboard.tags.show', $tag) }}">{{ $tag->name }}</a>
                    <button wire:click="deleteTag({{ $tag->id }})" class="flex items-center justify-center">
                        <x-icon-trash class="w-5 h-5 text-gray-500 hover:text-gray-700" />
                    </button>
                </li>
            @empty
                <li class="p-3">
                    No tags yet
                </li>
            @endforelse
        </ul>

    </div>

</div>