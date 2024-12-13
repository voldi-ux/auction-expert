@props(["value"=> ""])

<option :selected = "{{$value == '' ? true : false}}" value="">Select transmission type</option>
<option :selected = "{{$value == 'manual' ? true : false}}"  class="text-gray" value="manual">Manual</option>
<option :selected = "{{$value == 'automatic' ? true : false}}" class="text-gray" value="automatic">Automatic</option>
<option :selected = "{{$value == 'semi-automatic' ? true : false}}" class="text-gray" value="semi-automatic">Semi-Automatic</option>
<option :selected = "{{$value == 'cvt' ? true : false}}" class="text-gray" value="cvt">CVT (Continuously Variable Transmission)</option>
