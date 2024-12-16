@props(["value" => ""])
<option :selected="{{ $value == '' ? true : false }}" value="">
    Choose a car condition
</option>
<option
    :selected="{{ $value == 'new' ? true : false }}"
    class="text-gray"
    value="new"
>
    New
</option>
<option
    :selected="{{ $value == 'used_like_new' ? true : false }}"
    class="text-gray"
    value="used_like_new"
>
    Used Like New
</option>
<option
    :selected="{{ $value == 'used' ? true : false }}"
    class="text-gray"
    value="used"
>
    Used
</option>
<option
    :selected="{{ $value == 'damaged' ? true : false }}"
    class="text-gray"
    value="damaged"
>
    Damaged
</option>
