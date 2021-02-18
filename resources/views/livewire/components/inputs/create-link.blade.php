<div>
    <label for="newLink" class="relative">
        <span class="absolute left-0 flex items-center justify-center px-2" style="top:0px">
            <x-icon-plus class="w-6 h-6 text-gray-400" />
        </span>
        <input 
            required
            type="text" 
            id="newLinkUrl"
            autocomplete="off"
            placeholder="Save a URL"
            wire:model="newLinkUrl"
            wire:keydown.enter="createLink"
            class="w-full pl-10 border border-gray-300 bg-gray-50">
    </label>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            hotkeys('/', function (event, handler) {
                event.preventDefault()
                document.querySelector('#newLinkUrl').focus()
            });
        })        
    </script>
@endpush
