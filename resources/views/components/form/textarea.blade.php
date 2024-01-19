@props([
    'placeholder' => '',
    'value' => '',
    'name' => ''
])
<textarea class="form-control form-control" name="{{ $name }}" cols="30" rows="5" name="{{$name}}"  placeholder="{{$placeholder}}" >{{ $value }}</textarea>