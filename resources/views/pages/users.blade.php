<x-title title="Users" />
@component('inc.datatable', [
    'title' => 'Users',
    'headers' => [
        'Name',
        'Email',
        'Action'
    ],
])
    @slot('button') <x-btn id="add-user-btn" text="Add New User"/> @endslot
    @slot('body')
        @forelse( $users as $user )
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <button class="btn btn-sm btn-primary"
                        hx-get="{{route('b.users.details', ['user_id'=>$user->id])}}"
                        hx-target="#content"
                        >
                        See Details
                    </button>
                </td>
            </tr>
        @empty
        @endforelse
    @endslot
@endcomponent

@component('inc.modal_form', [
    'id' => 'add-user-modal',
    'title' => 'Create User',
    'action' => route('b.users.create'),
    'method' => 'POST'
])
    @slot('inputs')
        <div class="row">
            <div class="col-sm-12 mb-3">
                <form-label text="Name"/>
                <input type="text" name="name" class="form-control form-control-sm" id="">
            </div>

            <div class="col-sm-12 mb-3">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="col-sm-12 mb-3">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
        </div>
    @endslot
@endcomponent


@slot('js')
<script>
    $(document).on('click', `#add-user-btn`, function () {
        $(`#add-user-modal`).modal('show');
        htmx.process(document.body);
    })
</script>
@endslot

