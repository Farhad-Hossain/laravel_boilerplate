<div class="card">
    <div class="card-header">Software Settings</div>

    <div class="card-body">
        <x-form.form method="POST" class="d-form" action="{{route('b.software.settings')}}">
            
            <x-form.column label="Organization name" class="col-md-6">
                <x-form.input name="org_name" value="{{ $settings ? $settings->org_name : '' }}" />
            </x-form.column>

            <x-form.column label="Established Date" class="col-md-6">
                <x-form.input name="established_date" value="{{ $settings ? $settings->established_date : '' }}" />
            </x-form.column>

            <x-form.column label="Email" class="col-md-6">
                <x-form.input type="email" name="email" value="{{ $settings ? $settings->email : '' }}" />
            </x-form.column>

            <x-form.column label="Phone no." class="col-md-6">
                <x-form.input name="phone_number" value="{{ $settings ? $settings->phone_number : '' }}" />
            </x-form.column>

            <x-form.column label="Description" class="col-md-6">
                <x-form.text-area name="description" value="{{ $settings ? $settings->description : '' }}" />
            </x-form.column>

            <x-form.submit text="Save Changes" />

        </x-form.form>
    </div>
</div>