<x-notify />
<div class="card">
    
    <x-card.header>
        <span class='h6'>Software Setting</span>
    </x-card-header>

    <div class="card-body">
        <x-form.form method="POST" class="d-form" action="{{route('b.software.settings')}}">
            
            <x-form.col label="Organization name" class="col-md-6">
                <x-form.input name="org_name" value="{{ $settings ? $settings->org_name : '' }}" />
                <x-form.invalid name="org_name" />
            </x-form.col>

            <x-form.col label="Established Date" class="col-md-6">
                <x-form.input type="date" name="established_date" value="{{ $settings ? $settings->established_date : '' }}" />
                <x-form.invalid name="established_date" />
            </x-form.col>

            <x-form.col label="Email" class="col-md-6">
                <x-form.input type="email" name="email" value="{{ $settings ? $settings->email : '' }}" />
                <x-form.invalid name="email" />
            </x-form.col>

            <x-form.col label="Phone no." class="col-md-6">
                <x-form.input name="phone_number" value="{{ $settings ? $settings->phone_number : '' }}" />
                <x-form.invalid name="phone_number" />
            </x-form.col>

            <x-form.col label="Description" class="col-md-6">
                <x-form.text-area name="description" value="{{ $settings ? $settings->description : '' }}" />
                <x-form.invalid name="description" />
            </x-form.col>

            <x-form.submit text="Save Changes" />

        </x-form.form>
    </div>
</div>