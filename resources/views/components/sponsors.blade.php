<div id="sponsors" class="container mx-auto">
    <div class="flex flex-wrap items-center justify-center gap-12">
        <p class="h1-header">Check out our amazing sponsors!</p>
        @foreach ($sponsorTier as $tier)
            <h2 class="w-full text-center text-2xl font-bold">
                {{ $tier->Tier }}
            </h2>
            @foreach ($tier->sponsors as $sponsor)
                <x-sponsor :sponsor="$sponsor"></x-sponsor>
            @endforeach
        @endforeach
    </div>
</div>
