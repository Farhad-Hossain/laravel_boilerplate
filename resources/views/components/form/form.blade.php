@props([
    'method' => 'GET',
    'action' => '',
    ]
)

<form action="{{$action}}" method="{{$method}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        {{ $slot }}
    </div>
</form>