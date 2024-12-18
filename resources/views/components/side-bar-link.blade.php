@props(["icon", "active" => false, "title", "routeName"])

<a
    href="{{ __(route($routeName)) }}"
    class="transition-all hover:text-yellow-600 space-x-4   cursor-pointer {{
        $active ? 'text-yellow-600 text-white' : 'bg-transparent'
    }} "
>
    <i class="{{ $icon }}"></i>
    <span>{{ $title }}</span>
</a>
