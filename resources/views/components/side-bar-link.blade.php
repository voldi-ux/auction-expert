@props(["icon", "active" => false, "title", "routeName"])

<div
    class="transition-all hover:text-yellow-600  space-x-4 cursor-pointer {{
        $active ? 'text-yellow-600 text-white' : 'bg-transparent'
    }} "
>
    <i class="{{ $icon }}"></i>
    <a href="{{ __(route($routeName)) }}">{{ $title }}</a>
</div>
