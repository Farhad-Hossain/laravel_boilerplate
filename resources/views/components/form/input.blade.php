@props([
    'type' => 'text',
    'placeholder' => '',
    'value' => '',
    'name' => ''
])
<input type="{{$type}}" name="{{$name}}" class="form-control form-control-sm" placeholder="{{$placeholder}}" value="{{$value}}">