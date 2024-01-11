@props([
    'type' => 'text',
    'placeholder' => '',
    'value' => '',
    'name' => ''
])
<input type="{{$type}}" name="{{$name}}" class="form-control form-control" placeholder="{{$placeholder}}" value="{{$value}}">