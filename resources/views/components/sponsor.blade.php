@if (! is_null($sponsor->image))
    <img
        class="h-16 w-auto"
        src="{{ $sponsor->image }}"
        alt="{{ $sponsor->name }} logo"
    />
@else
    <p class="w-full pt-2 text-center text-lg font-bold">
        {{ $sponsor->name }}
    </p>
@endif
