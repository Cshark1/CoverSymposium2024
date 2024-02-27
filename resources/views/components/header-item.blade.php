@if(Request::is($slug))
    <a class="font-medium text-xl text-primary dark:focus:outline-none dark:focus:ring-1" href="{{$slug}}" aria-current="page">{{$page}}</a>
@else
    <a class="font-medium text-xl text-gray-600 hover:text-gray-400" href="{{$slug}}">{{$page}}</a>
@endif
