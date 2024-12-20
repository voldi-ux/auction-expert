@props(["value" => ""])
<option :selected="{{ $value == '' ? true : false }}" value="">
    Sort as
</option>
<option
    :selected="{{ $value == 'new' ? true : false }}"
    class="text-gray"
    value="newly_listed"
>
    Newly Listed first
</option>
<option
    :selected="{{ $value == 'used_like_new' ? true : false }}"
    class="text-gray"
    value="old_first"
>
    Oldest first
</option>
