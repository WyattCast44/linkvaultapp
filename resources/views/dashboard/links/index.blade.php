<div>
    
    <div class="max-w-3xl mx-auto">

        <div class="flex items-center justify-between mx-4 my-5 md:mx-0">
            <h2 class="text-3xl font-semibold">Your Links</h2>
        </div>

        <ul class="mb-8 bg-white border divide-y" x-data="{ link: @entangle('activeLink') }">
            @forelse ($links as $link)
                @include('dashboard.links.partials.link')
            @empty
                <li class="p-3">
                    No links yet
                </li>
            @endforelse
        </ul>

    </div>

</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            // hotkeys('j', function (event, handler) {
            //     event.preventDefault()
            //     Livewire.emit('move-focus')
            // });
        });
    </script>
@endpush