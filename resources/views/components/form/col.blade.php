@props([
        'class' => $class ?? '',
        'label' => '',
    ]
)
<div {{$attributes->merge(["class"=>"mb-3 form-group ".$class])}}>
    <label for="" class="mb-2">{{$label}}</label>
    {{ $slot }}
</div>