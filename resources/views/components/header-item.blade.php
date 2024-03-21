@if (Request::is($slug))
    <a
        class="text-xl font-medium text-primary dark:focus:outline-none dark:focus:ring-1"
        href="{{ $slug }}"
        aria-current="page"
    >
        {{ $page }}
    </a>
@else
    <a
        class="text-xl font-medium text-gray-600 hover:text-gray-400"
        href="{{ $slug }}"
    >
        {{ $page }}
    </a>
@endif
