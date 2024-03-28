<div class="mb-6 flex h-full w-full flex-row gap-2">
    <p
        class="flex items-center justify-center text-center text-lg sm:whitespace-nowrap md:text-2xl"
    >
        {{ $event->start_time }} - {{ $event->end_time }}
    </p>

    <div class="timetable-drop-shadow min-h-12 w-full">
        <div
            class="timetable-container flex h-full w-full items-center justify-start gap-2 break-normal bg-primary pe-2 ps-8 md:ps-12"
        >
            @if (!is_null($event->title) && $event->isPublished())
                <p class="text-md font-normal md:text-base md:font-bold">
                    {{ $event->title }}
                </p>
            @else
                <p class="text-md font-normal md:text-base md:font-bold">
                    To be announced!
                </p>
            @endif
        </div>
    </div>

    <div class="timetable-drop-shadow min-h-12 min-w-40">
        <div
            class="flex h-full w-full items-center justify-start gap-2 break-normal bg-primary px-4"
        >
            @if (is_null($event->speaker))
                <div class="flex flex-col gap-1">
                    <p class="font-weight-lighter flex flex-row gap-1 text-sm">
                        -
                    </p>
            @elseif ($event->isPublished())
                <div class="flex flex-col gap-1">
                    <p class="font-weight-lighter flex flex-row gap-1 text-sm">
                        by
                        <a
                            href="/speaker/{{ $event->speaker->id }}"
                            class="block break-words text-blue-900 underline"
                        >
                            {{ $event->speaker->name }}
                            <span
                                class="fi fi-{{ $event->speaker->country }} h-2.5"
                            ></span>
                        </a>
                    </p>
                    <div class="flex flex-row gap-1">
                        <box-icon size="1rem" name="buildings"></box-icon>
                        <p class="font-weight-lighter text-sm">
                            {{ $event->speaker->organisation }}
                        </p>
                    </div>
                </div>
            @else
                <p class="font-weight-lighter text-sm">by TBA</p>
            @endif
        </div>
    </div>
</div>
</div>
