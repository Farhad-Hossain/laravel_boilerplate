<x-title title="Roles" />
@component('inc.datatable', [
    'title' => 'Roles',
    'headers' => [
        'Name',
        'Description',
        'Action'
    ],
])

@slot('button')
    <button class="btn btn-sm btn-primary" id="add-role-btn">Add Role</button>
@endslot

@slot('body')
    @forelse( $roles as $role )
        <tr>
            <td>{{ $role->name }}</td>
            <td>{{ $role->description }}</td>
            <td>
                <a class="btn btn-sm btn-primary role-details-btn d-link" 
                    href="{{route('b.permission.role.details', ['role_id'=>$role->id])}}" 
                    title="Role Details"
                    >Details</a>
            </td>
        </tr>
    @empty
    @endforelse
@endslot

@slot('html')
    @component('inc.modal_form', [
        'id' => 'add-role-modal',
        'title' => 'Add Role',
        'action' => route('b.permission.create_role'),
        'method' => 'POST'
    ])
        @slot('inputs')
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <label for="">Role</label>
                    <input type="text" name="name" class="form-control form-control-sm" id="">
                </div>

                <div class="col-sm-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
            </div>
        @endslot
    @endcomponent
@endslot

@slot('js')
<script>
    $(document).on('click', `#add-role-btn`, function () {
        $(`#add-role-modal`).modal('show');
        htmx.process(document.body);
    })
    $(document).on('click', `#role-details-btn`, function (){
        alert( $(this).data('link') );
    })
</script>
@endslot

@endcomponent