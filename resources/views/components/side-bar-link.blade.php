@props(["icon", "active" => false, "title", "routeName"])

<a
    href="{{ __(route($routeName)) }}"
    class="transition-all hover:text-yellow-600    cursor-pointer {{
        $active ? 'text-yellow-600 text-white' : 'bg-transparent'
    }} "
>
    <div class="inline-block w-8">
        <i class="{{ $icon }}"></i>
    </div>
    <span>{{ $title }}</span>
</a>
