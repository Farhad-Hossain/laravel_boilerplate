<x-card.card>
    <x-card.header>
        <span>User Detail</span>
        <span>
            <a href="" class="btn btn-sm btn-primary">User List</a>
        </span>
    </x-card.header>

    <x-card.body>
        <x-form.form action="/" method="POST">
            
            <x-form.column class="col-md-3" label="Name">
                <x-form.input type="text" name="name" placeholder="Name..." value="" />
            </x-from.column>

            <x-form.column class="col-md-3" label="Email">
                <x-form.input type="email" name="email" placeholder="Email..." value="" />
            </x-from.column>

            <x-form.submit class="" text="Save Changes" />

        </x-form.form>
    </x-card.body>
</x-card.card>
