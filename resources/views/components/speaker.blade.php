<div class="flex
    @if($reversed)
        {{"flex-row-reverse"}}
    @else
        {{"flex-row"}}
    @endif
gap-4">
    <div class="min-w-32 max-w-32">
        @if(!is_null($speaker->image) && $speaker->isPublished())
            <img class="w-32" src="{{$speaker->image}}">
        @else
            <img class="w-32" src="default.png">
        @endif

        @if(!is_null($speaker->schedule))
            <p class="font-bold text-lg">Speaks at:</p>
            @foreach($speaker->schedule as $speak)
                @if($speak->isPublished())
                    <p class="font-semibold text-sm break-words">
                        {{$speak->title}}
                    </p>

                    <p class="font-semibold text-sm break-words">
                        {{$speak->start_time}} - {{$speak->end_time}}
                    </p>
                @endif
            @endforeach
        @endif
    </div>

    <div class="flex flex-col
     @if($reversed)
        {{"items-end"}}
     @endif
     gap-1">
        <div class="flex flex-row gap-2 items-center align-center">
            @if(!is_null($speaker->link) && $speaker->isPublished())
                <a href="{{$speaker->link}}">
            @endif

            @if(!is_null($speaker->name) && $speaker->isPublished())
                <p class="font-semibold text-lg">{{$speaker->name}}</p>
            @else
                <p class="font-semibold text-lg">TBA</p>
            @endif

            @if(!is_null($speaker->link) && $speaker->isPublished())
                </a>
            @endif
            @if(!is_null($speaker->country) && $speaker->isPublished())
                <span class="fi fi-{{$speaker->country}} h-8"></span>
            @endif
            @if(!is_null($speaker->organisation) && $speaker->isPublished())
                <div class="bg-primary flex flex-row gap-1 p-2 rounded-full">
                    <box-icon name='buildings'></box-icon>

                    @if(!is_null($speaker->organisation_url))
                        <a class="" href="{{$speaker->organisation_url}}">
                    @endif
                        <p class="break-words">
                            {{$speaker->organisation}}
                        </p>
                    @if(!is_null($speaker->organisation_url))
                        </a>
                    @endif
                </div>
            @endif
        </div>

        <p class="text-justify">
            @if($speaker->isPublished())
                {{$speaker->description}}
            @endif
        </p>
    </div>
</div>
