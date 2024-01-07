@if( session('success') )
    <div class="page-content">
        <p class="alert text-success bg-white m-0">{{ 'success' }}</p>
    </div>
@endif