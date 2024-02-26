<div class="flex flex-row h-full w-full mb-6">
    <p class="sm:whitespace-nowrap text-center text-lg md:text-2xl flex items-center justify-center pr-2">
        {{ $event->start_time }} - {{ $event->end_time }}
    </p>

    <div class="timetable-drop-shadow w-full min-h-12">
        <div class="timetable-container bg-primary w-full break-normal h-full ps-8 md:ps-12 flex items-center justify-start gap-2">
            <p class="font-normal md:font-bold text-md md:text-base">{{ $event->name }}</p>
            @if(!is_null($event->link))
                <p class="text-sm font-weight-lighter pt-2">by </p>
                <a href="{{ $event->link }}" class="text-sm font-weight-lighter pt-2 me-4 text-blue-900 underline">{{$event->speaker}}</a>
            @else
                <p class="text-sm font-weight-lighter pt-2 me-4">by {{$event->speaker}}</p>
            @endif
        </div>
    </div>
</div>
