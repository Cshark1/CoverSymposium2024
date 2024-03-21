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
    class="container mx-auto flex w-full flex-wrap flex-column items-start justify-center gap-16"
>
    @foreach ($sponsorTiers as $sponsorTier)
        <div class="flex flex-col items-center justify-items-center gap-4 flex-wrap">
            <p class="h1-header">{{ $sponsorTier->Tier }}</p>
            <div class="flex items-center">
                @foreach ($sponsorTier->sponsors as $sponsor)
                    <x-sponsor-extended :sponsor="$sponsor"></x-sponsor-extended>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
