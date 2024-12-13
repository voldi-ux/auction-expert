@props(["value" => ""])
    <option :selected = "{{$value == '' ? true : false}}"  class="text-gray" value="">Select Petrol Type</option>
    <option :selected = "{{$value == 'petrol' ? true : false}}" class="text-gray" value="petrol">Petrol</option>
    <option :selected = "{{$value == 'diesel' ? true : false}}"  class="text-gray" value="diesel">Diesel</option>
    <option :selected = "{{$value == 'electric' ? true : false}}" class="text-gray" value="electric">Electric</option>
    <option :selected = "{{$value == 'hybrid' ? true : false}}" class="text-gray" value="hybrid">Hybrid</option>
    <option 
     :selected = "{{$value == 'hydrogen' ? true : false}}"  
    class="text-gray" value="hydrogen">Hydrogen</option>

