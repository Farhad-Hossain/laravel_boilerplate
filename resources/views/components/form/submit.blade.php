@props([
    'class' => '',
    'text' => '',
    'close' => false,
])
<div {{ $attributes->merge([
        'class' => "col-sm-12 ".$class
    ])}}>
    <button class="btn btn-primary" type="submit">{{ $text }}</button>
    @if( $close )
        <x-modal-close-btn />
    @endif
</div>