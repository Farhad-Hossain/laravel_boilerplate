<form action="" method="{{$method ?? 'GET'}}" enctype="multipart/form-data">
    @csrf
    {{ $inputs }}
</form>