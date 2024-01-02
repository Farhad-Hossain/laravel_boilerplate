<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<div class="card">
    <div class="card-header text-center">{{ $role->name }}</div>
    <div class="card-body">
        <div class="row"> 
            <form action="" method="POST">
                @csrf
                <div class="col-sm-12 col-md-12 mb-2">
                    <label class="form-label" for="multiple-select-clear-field">Choose Permissions</label>
                    <select class="form-select" name="permissions[]" id="multiple-select-clear-field" data-placeholder="Choose anything" multiple>
                        @foreach($permissions as $permission)
                            <option value="{{$permission->id}}" {{$role->hasPermissionTo($permission) ? 'selected' : ''}} >{{$permission->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-sm-12">
                    <button class="btn btn-sm btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('b')}}/plugins/select2/js/select2-custom.js"></script>