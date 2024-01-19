@props([
    'method' => 'GET',
    'action' => '',
    'class' => ''
    ]
)

<form action="{{$action}}" method="{{$method}}" enctype="multipart/form-data" {{ $attributes->merge([
        'class' => "col-sm-12 ".$class
    ])}}>
    @csrf
    <div class="row">
        {{ $slot }}
    </div>
</form>