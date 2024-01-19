@props([
    'class' => '',
    'id' => '',
    'text' => '',
    'type' => 'button',
    'text' => ''
])
<button type="{{$type}}" id="{{ isset($id) ? $id : '' }}" {{ $attributes->merge([
    'class' => 'btn '.$class
]) }} >
    {{$text}}
</button>