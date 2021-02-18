<div 
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
            aria-labelledby="modal-headline" 
            x-show="showCommandPalette"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

            {{-- <div>
                <div class="flex items-center justify-center w-12 h-12 mx-auto bg-green-100 rounded-full">
                    <!-- Heroicon name: outline/check -->
                    <svg class="w-6 h-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div class="mt-3 text-center sm:mt-5">
                    <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-headline">
                        Payment successful
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur amet labore.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="mt-5 sm:mt-6">
                <button type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                    Go back to dashboard
                </button>
            </div> --}}

        </div>

    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            hotkeys('ctrl+shift+p', function (event, handler) {
                event.preventDefault()
                @this.set('showCommandPalette', true);
            });

            hotkeys('escape', function (event, handler) {
                event.preventDefault()
                Livewire.emit('closeModals')
            });
        })        
    </script>
@endpush