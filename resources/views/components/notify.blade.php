@if( session('success') )
    <div class="alert alert-success border-0 bg-success alert-dismissible fade show">
        <div class="text-white">{{ session('success') }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @php
        request()->session()->forget('success');
    @endphp
@endif

@if( session('error') )
    <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
        <div class="text-white">{{ session('error') }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    request()->session()->forget('error');
@endif

