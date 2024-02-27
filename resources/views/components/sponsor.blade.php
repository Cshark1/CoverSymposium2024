<div class="border-primary min-w-52 max-w-72">
    <a href="
    @if(!is_null($sponsor->link))
        {{$sponsor->link}}
    @endif
    ">
        @if(!is_null($sponsor->image))
            <img src="{{ $sponsor->image }}" alt="{{ $sponsor->name }} logo">
        @endif
        <p class="pt-2 w-full text-center font-bold text-lg">{{ $sponsor->name }}</p>
    </a>
    @if(!is_null($sponsor->description))
        <p class="w-full text-justify pt-4">{{ $sponsor->description }}</p>
    @endif
    @if(!is_null($sponsor->link))
        <a href="{{$sponsor->link}}">
            <p class="w-full text-center pt-4 text-blue-900 underline">Learn more!</p>
        </a>
    @endif
</div>
