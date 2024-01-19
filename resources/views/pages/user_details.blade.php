<x-card.card>
    <x-card.header>
        <span>User Detail</span>
        <span>
            <a href="" class="btn btn-sm btn-primary">User List</a>
        </span>
    </x-card.header>

    <x-card.body>
        <x-form action="{{route('b.users.save', ['user_id'=>$user->id])}}" method="POST">
            
            <x-form.col class="col-md-3" label="Name">
                <x-form.input type="text" name="name" placeholder="Name..." value="{{$user->name}}" />
            </x-from.col>

            <x-form.col class="col-md-3" label="Email">
                <x-form.input type="email" name="email" placeholder="Email..." value="{{$user->email}}" />
            </x-from.col>

            <x-form.submit class="" text="Save Changes" />

        </x-form>
    </x-card.body>
</x-card.card>
