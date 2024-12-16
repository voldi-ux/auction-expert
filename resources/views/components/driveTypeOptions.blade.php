@props(["value"=>""])

<option :selected="{{ $value == '' ? true : false }}" value="">
    Select drive type
</option>
<option
    :selected="{{ $value == 'fwd' ? true : false }}"
    class="text-gray"
    value="fwd"
>
    FWD (Front-Wheel Drive)
</option>
<option
    :selected="{{ $value == 'rwd' ? true : false }}"
    class="text-gray"
    value="rwd"
>
    RWD (Rear-Wheel Drive)
</option>
<option
    :selected="{{ $value == 'awd' ? true : false }}"
    class="text-gray"
    value="awd"
>
    AWD (All-Wheel Drive)
</option>
<option
    :selected="{{ $value == '4wd' ? true : false }}"
    class="text-gray"
    value="4wd"
>
    4WD (Four-Wheel Drive)
</option>
