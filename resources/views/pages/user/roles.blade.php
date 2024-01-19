<x-notify />
<x-card.card>

    <x-card.header title="Role list">
        <x-btn class="btn-primary d-modal-link" href="{{ route('b.permission.role_form') }}" title="Add Role" text="Add Role" />
    </x-card.header>

    <x-card.body>
        <x-datatable title='Roles' :headers="[
                'Name',
                'Description',
                'Action'
            ]">

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
        </x-datatable>

    </x-card.body>
</x-card.card>





