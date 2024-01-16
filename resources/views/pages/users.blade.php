@component('inc.datatable', [
    'title' => 'Users',
    'headers' => [
        'Name',
        'Email',
        'Action'
    ],
])
    @slot('button') <x-btn id="add-user-btn" class="d-modal-link" href="{{ route('b.users.save') }}" title="Add User" text="Add New User"/> @endslot
    @slot('body')
        @forelse( $users as $user )
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a class="btn btn-sm btn-primary d-link"
                        href="{{route('b.users.details', $user->id)}}"
                        title="User Details"
                        >
                        See Details
                    </a>
                </td>
            </tr>
        @empty
        @endforelse
    @endslot
@endcomponent