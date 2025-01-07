@props([
    'url' => '/',
    'active' => false,
    'icon' => null,
    'mobile' => false
])

@if($mobile)
    <a href="{{$url}}" class="d-block px-4 py-2 {{$active ? 'text-warning font-weight-bold' : ''}}">
        @if($icon)
            <i class="fa fa-{{$icon}} mr-1"></i>
        @endif
        {{$slot}}
    </a>
@else
    <a href="{{$url}}" class="text-white ms-2 me-3 {{$active ? 'text-warning font-weight-bold' : ''}} py-2 {{$active ? 'text-decoration-underline' : ''}}">
        @if($icon)
            <i class="fa fa-{{$icon}} mr-1"></i>
        @endif
        {{$slot}}
    </a>
@endif