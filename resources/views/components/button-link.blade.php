@props([
    'url'=> '/test',
    'icon'=> null,
    'bgClass'=>'bg-yellow-500',
    'hoverClass'=>'hover:bg-yellow-500',
    'textClass'=>'text-black',
    'mobile'=>null,
    ])

@if($mobile)
    <a
        href="{{$url}}"
        class="flex duration-200 items-center gap-2 px-3 py-2 rounded-md {{$textClass}} {{$bgClass}} {{$hoverClass}}">
        @if($icon)
            <i class="fa fa-{{$icon}} mr-1"></i>
        @endif
        {{$slot}}
    </a>
@else
<a
    href="{{$url}}"
    class="flex duration-200 items-center gap-2 px-3 py-2 rounded-md {{$textClass}} {{$bgClass}} {{$hoverClass}}">
    @if($icon)
        <i class="fa fa-{{$icon}} mr-1"></i>
    @endif
    {{$slot}}
</a>
@endif
