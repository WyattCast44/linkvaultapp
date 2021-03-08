<div>
    
    <div class="max-w-3xl mx-auto">

        <div class="flex items-center justify-between mx-4 my-5 md:mx-0">
            <h2 class="text-3xl font-semibold">Your Links ({{ $links->total() }})</h2>
        </div>

        <ul class="mb-8 bg-white border divide-y" x-data="{ link: @entangle('activeLink') }">
            @forelse ($links as $link)
                <livewire:components.link-card :link="$link" :key="$link->hash_id" />
            @empty
                <li class="p-3">
                    No links yet
                </li>
            @endforelse
        </ul>

        <div class="my-10">
            {{ $links->links() }}
        </div>

    </div>

</div>

@push('scripts')
<script>
    Livewire.on('linkAdded', function() {
        console.log("Link added!");
    })
    Livewire.on('linkDeleted', function() {
        console.log("Link deleted!");
    })
</script>
@endpush