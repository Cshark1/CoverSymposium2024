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
                {{$speaker->short_description}}
                @if(!is_null($speaker->description))
                    <a class="url hover:cursor-pointer" onclick="show('{{$speaker->id}}');">Read more..</a>
                @endif
            @endif
        </p>
        @if($speaker->isPublished() && !is_null($speaker->description))
            <div id="description-{{$speaker->id}}" class="z-40 fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 min-h-[10vh] w-[75vw] bg-bg border-primary border-2 rounded py-1 px-2 scale-0 opacity-0 transition-all duration-300">
                <div>
                    <div class="w-full flex flex-row-reverse">
                        <a class="hover:rotate-180 hover:scale-110 hover:cursor-pointer transition-all" onclick="hide('{{$speaker->id}}');">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" width="18px" height="18px"><path d="M 21.734375 19.640625 L 19.636719 21.734375 C 19.253906 22.121094 18.628906 22.121094 18.242188 21.734375 L 13 16.496094 L 7.761719 21.734375 C 7.375 22.121094 6.746094 22.121094 6.363281 21.734375 L 4.265625 19.640625 C 3.878906 19.253906 3.878906 18.628906 4.265625 18.242188 L 9.503906 13 L 4.265625 7.761719 C 3.882813 7.371094 3.882813 6.742188 4.265625 6.363281 L 6.363281 4.265625 C 6.746094 3.878906 7.375 3.878906 7.761719 4.265625 L 13 9.507813 L 18.242188 4.265625 C 18.628906 3.878906 19.257813 3.878906 19.636719 4.265625 L 21.734375 6.359375 C 22.121094 6.746094 22.121094 7.375 21.738281 7.761719 L 16.496094 13 L 21.734375 18.242188 C 22.121094 18.628906 22.121094 19.253906 21.734375 19.640625 Z"/></svg>
                        </a>
                    </div>

                    <p class="text-justify">
                        {{$speaker->description}}
                    </p>
                </div>
            </div>

            <div id="bgBlur-{{$speaker->id}}" class="bgBlur z-30 w-screen h-screen bg-black fixed top-0 left-0 opacity-0 hidden transition-opacity duration-300">

            </div>
        @endif
    </div>
</div>
