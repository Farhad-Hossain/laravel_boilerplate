@props([
    'class' => '',
    'text' => ''
])
<div {{ $attributes->merge([
        'class' => "col-sm-12 ".$class
    ])}}>
    <button class="btn btn-primary" type="submit">{{ $text }}</button>
</div>