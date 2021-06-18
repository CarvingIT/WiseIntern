<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Associate Form') }}
        </h2>
    </x-slot>
	<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="overflow-hidden shadow-xl sm:rounded-lg">
            <div class="w-full max-w-xs">
</div> 

<form class="bg-white rounded px-8 pt-6 pb-8 mb-4 align=center w-full " method="post" action="/admin/save-associate">
{{@csrf_field()}}
	{{method_field('PATCH')}}

<div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name" >
        Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" value="@if(isset($associates->name)){{$associates->name}}@endif" placeholder="Name" required autofocus autocomplete="name">
    	</div>
		<span class="field_error">
		@error('name')
		{{$message}}
		@enderror
		</span>
		
			
			<div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="type">
        Associate Type
      </label>
           <select id="type" name="type">
  <option value="individual" >Individual</option>
  <option value="company" >Company</option>
  </select>
  </div>


            <div>
			<label class="block text-gray-700 text-sm font-bold mb-2" for="address">
				Address
             </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" name="address" value="" placeholder="Address" required autofocus autocomplete="address">
            </div>
		<span class="field_error">
		@error('address')
		{{$message}}
		@enderror
		</span>

        
			<div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
			Email
			</label>
		<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" name="email" value="" placeholder="Email" required autofocus autocomplete="email">
		</div>		
		<span class="field_error">
		@error('email')
		{{$message}}
		@enderror
		</span>
		
            
			<div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone1">
			Phone1
          </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone1" type="text" name="phone1" value="" placeholder="Phone1" required autofocus autocomplete="phone1">
    		</div>
		<span class="field_error">
		@error('phone1')
		{{$message}}
		@enderror
		</span>
		
			
			<div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone2">
			Phone2
			</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone2" type="text" name="phone2" value="" placeholder="Phone2" required autofocus autocomplete="phone2">
			</div>
	<span class="field_error">
		@error('phone2')
		{{$message}}
		@enderror
		</span>
	</br>			
	<div class="inline-flex">
<div class="flex space-x-4 ...">
<button type="submit" class="bg-blue-600 text-blue-100 text-lg rounded hover:bg-blue-500 px-6 py-3 focus:outline-none">Submit</button>
      

    </div>
</div>



</form>

<style>
.field_error{color:red;}
</style>
</div>
        </div>
    </div>
  </x-app-layout>
