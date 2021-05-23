<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

<form method="post" action="formsubmit">
{{@csrf_field()}}

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

		<span class="field_error">
		@error('name')
		{{$message}}
		@enderror
		</span>
<div>
                <x-jet-label for="type" value="{{ __('Associate Type') }}" />
                <x-jet-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" required autofocus autocomplete="name" />
            </div>


            <div>
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('name')" required autofocus autocomplete="name" />
            </div>

		<span class="field_error">
		@error('address')
		{{$message}}
		@enderror
		</span>

        
<div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
		<span class="field_error">
		@error('email')
		{{$message}}
		@enderror
		</span>
            <div>
                <x-jet-label for="phone1" value="{{ __('Phone1') }}" />
                <x-jet-input id="phone1" class="block mt-1 w-full" type="text" name="phone1" :value="old('phone1')" required autofocus autocomplete="name" />
            </div>
		<span class="field_error">
		@error('phone1')
		{{$message}}
		@enderror
		</span>
<div>
                <x-jet-label for="phone2" value="{{ __('Phone2') }}" />
                <x-jet-input id="phone2" class="block mt-1 w-full" type="text" name="phone2" :value="old('phone2')" required autofocus autocomplete="name" />
            </div>
	<span class="field_error">
		@error('phone2')
		{{$message}}
		@enderror
		</span>
</br>  <x-jet-button class="ml-4">
                    {{ __('Submit') }}
                </x-jet-button>

</form>

<style>
.field_error{color:red;}
</style>
    </x-jet-authentication-card>
</x-guest-layout>
