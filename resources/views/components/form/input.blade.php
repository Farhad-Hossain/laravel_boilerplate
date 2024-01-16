@props([
    'type' => 'text',
    'placeholder' => '',
    'value' => '',
    'name' => '',
    'class' => ''
])
<input type="{{$type}}" name="{{$name}}" 
    {{ $attributes->merge([
        'class' => 'form-control mb-1'.$class
    ]) }} 
    placeholder="{{$placeholder}}" value="{{$value}}" />