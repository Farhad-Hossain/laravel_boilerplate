<x-form 
    class="d-modal-form" 
    action="{{ route('b.users.save', ['user_id' => $user->id ?? '']) }}" 
    method="POST" 
    >
    
    <x-form.col class="col-md-6" label="Name">
        <x-form.input type="text" name="name" value="{{ $user->name ?? '' }}" />
        <x-form.invalid name="name" />
    </x-form.col>

    <x-form.col class="col-md-6" label="Email">
        <x-form.input type="email" name="email" value="{{ $user->email ?? '' }}" />
        <x-form.invalid name="email" />
    </x-form.col>

    <x-form.col class="col-md-6" label="Password">
        <x-form.input name="password" type="password" value="{{ $user->password }}" />
        <x-form.invalid name="password" />
    </x-form.col>

    <x-form.col class="col-md-12" label="">
        <hr />
        <x-btn type="submit" text="Save Changes" />
        <x-modal-close-btn />
    </x-form.col>
    

</x-form>