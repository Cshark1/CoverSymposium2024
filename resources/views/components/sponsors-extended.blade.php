<style>
    #sponsors {
        display: none;
    }
</style>

<div class="flex items-center justify-center">
    <h2 class="h1-header">Sponsors</h2>
</div>

<div class="separator"></div>

<div
    class="container mx-auto flex w-full flex-wrap items-start justify-center gap-16"
>
    @foreach ($sponsorTiers as $sponsorTier)
        @foreach ($sponsorTier->sponsors as $sponsor)
            <x-sponsor-extended :sponsor="$sponsor"></x-sponsor-extended>
        @endforeach
    @endforeach
</div>
