@component('inc.datatable', [
    'title' => 'Permissions',
    'headers' => [
        'Name',
        'Description'
    ],
])

@slot('button')
    <button class="btn btn-sm btn-primary" id="add-permission-btn">Add Permission</button>
@endslot

@slot('body')
    @forelse( $permissions as $p )
        <tr>
            <td>{{ $p->name }}</td>
            <td>{{ $p->description }}</td>
        </tr>
    @empty
    @endforelse
@endslot

@slot('html')
    @component('inc.modal_form', [
        'id' => 'add-permission-modal',
        'title' => 'Add Permission',
        'action' => route('b.permission.permission.create'),
        'method' => 'POST'
    ])
        @slot('inputs')
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <label for="">Permission</label>
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
    $(document).on('click', `#add-permission-btn`, function () {
        $(`#add-permission-modal`).modal('show');
        htmx.process(document.body);
    })
</script>
@endslot

@endcomponent