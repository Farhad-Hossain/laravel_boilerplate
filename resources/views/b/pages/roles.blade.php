<div class="card-header d-flex justify-content-between">
    <span>All Roles</span>
    <span>
        <button class="btn btn-sm btn-success" id="role-create-btn">Add New</button>
    </span>
</div>
@component('b.inc.datatable', [
    'title' => 'All Roles',
    'headers' => [
        'Name',
        'Action',
    ]
])
    @slot('body')
        @foreach( $roles as $role )
        <tr>
            <td>{{ $role->name }}</td>
            <td>
                <button class="btn btn-sm btn-danger">Delete</button>
            </td>
        </tr>
        @endforeach
    @endslot
@endcomponent

@component('b.inc.modal_form', [
    'id' => 'role-create-modal',
    'title' => 'Add Role',
    'url' => '',
])
    @slot('body')
    @endbody

@endcomponent

<script>
    $(document).on('click', '#role-create-btn', function () {
        $(`#role-create-modal`).modal('show');
    })
</script>