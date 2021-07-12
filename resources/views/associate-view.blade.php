

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Associate View') }}
        </h2>
    </x-slot>
	<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="overflow-hidden shadow-xl sm:rounded-lg">
            <div class="w-full max-w-xs">
</div> 

{{@csrf_field()}}


<h1>Name:-{{$user->name}}</h1>
</br>
<h2>Associate Type:-{{$user->type}}</h2>
</br>
<h3>Address:-{{$user->address}}</h3></br>
<h4>Email:-{{$user->email}}</h4>
</br>
<h5>Phone1:-{{$user->phone1}}</h5></br>
<h6>Phone2:-{{$user->phone2}}</h6>  </br>

<button  class="bg-blue-600 text-blue-100 text-lg rounded hover:bg-blue-500 px-6 py-3 focus:outline-none"  value="back" onclick="history.back()" >Back To List</button>
  
  
  
  

</div>
        </div>
    </div>
  </x-app-layout>
