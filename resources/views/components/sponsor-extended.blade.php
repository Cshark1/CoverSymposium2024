<div class="min-w-52 max-w-72 border-primary">
    <a
        href="
    @if (! is_null($sponsor->link))
        {{ $sponsor->link }}
    @endif
    "
    >
        @if (! is_null($sponsor->image))
            <img
                src="{{ $sponsor->image }}"
                alt="{{ $sponsor->name }} logo"
            />
        @endif

        <p class="w-full pt-2 text-center text-lg font-bold">
            {{ $sponsor->name }}
        </p>
    </a>
    @if (! is_null($sponsor->description))
        <p class="w-full pt-4 text-justify">{{ $sponsor->description }}</p>
    @endif

    @if (! is_null($sponsor->link))
        <a href="{{ $sponsor->link }}">
            <p class="w-full pt-4 text-center text-blue-900 underline">
                Learn more!
            </p>
        </a>
    @endif
</div>
