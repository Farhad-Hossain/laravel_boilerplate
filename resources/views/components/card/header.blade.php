@props([
    "title" => '',
])
<div class="card-header bg-light pt-3 card-title d-flex justify-content-between">
    <span class="m-0">{{$title}}</span>
    {{ $slot }}
</div>