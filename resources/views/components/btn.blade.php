@props([
    'class' => '',
    'id' => '',
    'text' => '',
    'type' => 'button'
])
<button type="{{$type}}" id="{{ isset($id) ? $id : '' }}" {{ $attributes->merge([
    'class' => 'btn btn-primary '.$class
]) }}

>
    {{$text}}
</button>