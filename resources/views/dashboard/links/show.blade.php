<div>
    
    <div class="max-w-3xl mx-4 md:mx-auto">

        <div class="flex items-center justify-between my-5">
            <h2 class="text-3xl font-semibold truncate">
                <a  href="{{ $link->url }}" target="_blank" referrerpolicy="no-referrer" rel="noopener" title="Open link in new tab">
                    {{ $link->url }}
                </a>
            </h2>

            <label for="tag">
                <input type="text" name="tag" id="tag" placeholder="Add tag" wire:model.lazy="tag" wire:keydown.enter="addTag" autocomplete="off" aria-label="Add tag to link">
            </label>
        </div>

        <ul class="mb-8 bg-white border divide-y">
            @forelse ($tags as $tag)
                <li class="flex items-center justify-between p-3">
                    <a href="{{ route('dashboard.tags.show', $tag) }}">{{ $tag->name }}</a>

                    <div class="flex items-center space-x-2">

                        <button 
                            title="Remove tag from link"
                            aria-label="Remove tag from link"
                            wire:click="removeTag({{ $tag->id }})" 
                            class="flex items-center justify-center">
                            <x-icon-backspace class="w-5 h-5 text-gray-500 hover:text-gray-700" />
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