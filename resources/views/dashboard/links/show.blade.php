<div>
    
    <div class="max-w-3xl mx-auto">

        <div class="flex items-center justify-between my-5">
            <h2 class="text-3xl font-semibold truncate">
                <a  href="{{ $link->url }}" target="_blank" referrerpolicy="no-referrer" rel="noopener">
                    {{ $link->url }}
                </a>
            </h2>

            <label for="tag">
                <input type="text" name="tag" id="tag" placeholder="Add tag" wire:model.lazy="tag" wire:keydown.enter="addTag">
            </label>
        </div>

        <ul class="mb-8 border divide-y">
            @forelse ($tags as $tag)
                <li class="flex items-center justify-between p-3">
                    <a href="{{ route('dashboard.tags.show', $tag) }}">{{ $tag->name }}</a>

                    <div class="flex items-center space-x-2">

                        <button wire:click="removeTag({{ $tag->id }})" class="flex items-center justify-center">
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