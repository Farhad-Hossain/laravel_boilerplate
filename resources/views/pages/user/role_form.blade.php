<x-form action="{{ route('b.permission.save_role', $role) }}" class="d-modal-form" method="POST" enctype="multipart/form-data" >
    <x-form.col label="Role Name" >
        <x-form.input name="name" value="{{ $role ? $role->name : '' }}" />
        <x-form.invalid name="name" />
    </x-form.col>

    <x-form.col label="Description" >
        <x-form.textarea name="description" value="{{$role ? $role->description : ''}}" />
        <x-form.invalid name="description" />
    </x-form.col>

    <x-form.submit text="Save Changes" close="true" />
</x-form>