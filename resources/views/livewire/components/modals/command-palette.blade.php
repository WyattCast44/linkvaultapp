<div 
    x-cloak
    x-show="showCommandPalette"
    class="fixed inset-0 overflow-y-auto" 
    x-on:keydown.escape="showCommandPalette = false"
    x-data="{ showCommandPalette: @entangle('showCommandPalette') }">
    
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        
        <div 
            aria-hidden="true" 
            x-show="showCommandPalette"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 transition-opacity" 
            >
            <div class="absolute inset-0 bg-gray-500 opacity-80"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    
        <div 
            role="dialog" 
            aria-modal="true"
            x-show="showCommandPalette"
            aria-labelledby="modal-headline" 
            x-on:click.away="showCommandPalette = false"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="inline-block px-4 pt-3 pb-3 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-4">


            <label for="command-palette-input">

                <p class="mb-2 text-sm font-semibold text-gray-600">Command Palette</p>

                <input 
                    type="text" 
                    class="w-full" 
                    list="commands" 
                    spellcheck="false"
                    id="command-palette-input" 
                    x-on:keydown.enter="parseCommandArgs()"
                    x-on:keydown.tab="keepFocusInInput($event)">

                <datalist id="commands">

                    @foreach ($commands as $key => $value)
                        <option value="{{ $key }}">
                    @endforeach

                  </datalist>

            </label>

        </div>

    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            hotkeys('ctrl+shift+p', function (event, handler) {
                event.preventDefault()
                Livewire.emit('openCommandPalette')
                
            });

            hotkeys('escape', function (event, handler) {
                event.preventDefault()
                Livewire.emit('closeModals')
            });

            let target = document.querySelector('#command-palette-input');

            let observer = new IntersectionObserver(function() {
                target.focus()
            });

            observer.observe(target)
        });

        function parseCommandArgs() {
            let input = document.querySelector('#command-palette-input').value;
            let parts  = input.split(' ');
            let command = parts[0];
            let args = parts.splice(1);
            @this.performAction(command, args)
        }

        function keepFocusInInput($event) {
            $event.preventDefault()
            $event.target.value = $event.target.value + " "
            $event.target.focus()
        }
    </script>
@endpush