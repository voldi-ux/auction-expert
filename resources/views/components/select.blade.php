@props(["id" => "", "name", "class" => ""])
<select
    id="${{ $id }}"
    name="{{ $name }}"
    class="bg-transparent border-0 border-b border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  {{
        $class
    }} text-white"
>
    {{
        $slot
    }}
</select>
