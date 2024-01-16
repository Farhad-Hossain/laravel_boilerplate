<x-notify />
<x-card.card>
    
    <x-card.header title="User's List">
        <x-btn id="id-add-new-user" class="d-modal-link" href="{{route('b.users.save')}}" title="Create User" text="Add New User" />
    </x-card.header>

    <x-card.body>
        <x-datatable title='Users' :headers="['Name','Email','Action']" >
            @slot('body')
            @forelse( $users as $user )
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary d-link" href="{{route('b.users.details', $user->id)}}" title="User Details">
                            See Details
                        </a>
                    </td>
                </tr>
            @empty
            @endforelse
            @endslot
        </x-inc.datatable>
    </x-card.body>

</x-card.card>

