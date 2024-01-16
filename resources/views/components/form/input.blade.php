@props([
    'type' => 'text',
    'placeholder' => '',
    'value' => '',
    'name' => '',
    'class' => ''
])
<input type="{{$type}}" name="{{$name}}" 
    {{ $attributes->merge([
        'class' => 'form-control '.$class
    ]) }} 
    placeholder="{{$placeholder}}" value="{{$value}}" />