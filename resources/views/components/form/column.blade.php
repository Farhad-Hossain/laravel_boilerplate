@props([
        'class' => $class ?? '',
        'label' => '',
    ]
)
<div {{$attributes->merge(["class"=>"mb-3 form-group ".$class])}}>
    <label for="">{{$label}}</label>
    {{ $slot }}
</div>