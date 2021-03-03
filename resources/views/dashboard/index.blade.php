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
            placeholder="Search Linkvault or type a URL to save">

    </div>

</div>
