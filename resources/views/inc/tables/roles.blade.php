@component('inc.datatable', [
    'title' => 'Roles',
    'headers' => [
        'Name',
        'Description'
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
        </tr>
    @empty
    @endforelse
@endslot

@slot('html')
    @component('inc.modal', [
        'id' => 'add-role-modal',
        'title' => 'Add Role'
    ])
        @slot('body')
            @component('inc.form', ['action'=>'', 'method'=>'POST'])
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
    @endcomponent
@endslot

@slot('js')
<script>
    $(document).on('click', `#add-role-btn`, function () {
        $(`#add-role-modal`).modal('show');
    })
</script>
@endslot

@endcomponent