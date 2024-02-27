@if(Request::is($slug))
    <a class="font-weight-lighter text-2xl text-primary dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{$slug}}" aria-current="page">{{$page}}</a>
@else
    <a class="font-weight-lighter text-2xl text-gray-700 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{$slug}}">{{$page}}</a>
@endif
