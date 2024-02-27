<div class="flex items-center justify-center">
    <h2 class="h1-header">Sponsors</h2>
</div>

<div class="separator"></div>

<div class="w-full mx-auto flex items-start justify-center gap-16 flex-wrap container">

    @foreach($sponsors as $sponsor)
        <x-sponsor :sponsor="$sponsor"></x-sponsor>
    @endforeach
</div>
