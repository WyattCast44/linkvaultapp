<div>
    
    <div class="max-w-3xl mx-auto">

        <div class="flex items-center justify-between mx-4 my-5 md:mx-0">
            <h2 class="text-3xl font-semibold">Your Links ({{ $links->total() }})</h2>
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

        <div>
            {{ $links->links() }}
        </div>

    </div>

</div>