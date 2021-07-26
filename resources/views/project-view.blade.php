@push('head')
<link rel="stylesheet" href="/css/all.min.css" />
<link rel="stylesheet" href="/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="/css/jquery-ui.css" />
<script src="/js/jquery-3.5.1.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/jquery-ui.js"></script>
@endpush


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project View') }}
        </h2>
    </x-slot>
	<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="overflow-hidden shadow-xl sm:rounded-lg">
            <div class="w-full max-w-xs">
</div> 
               @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                   @if(Session::has('alert-' . $msg))
		        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    				<div class="mt-6 text-gray-900 leading-7 font-semibold ">
                        		<span>{{ Session::get('alert-' . $msg) }}</span>
				</div>
                        </div>
                   @endif
               @endforeach


{{@csrf_field()}}
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
			<div class="text-right">
			<!--
			<a title="Orders" href="/admin/people/{{$user->id}}/orders"><span class="fas fa-dollar-sign m-1"></span></a>
			<a title="Interactions" href="/admin/people/{{$user->id}}/interactions"><span class="fas fa-comments m-1"></span></a>
			-->
			</div>
			<div class="mt-6 text-gray-900">
				<div class="m-1">
			        <p class="text-xl">Title:-{{$user->title}} </p>	
				</div>
				<div class="m-1">
			        <p class="text-xl">Description:-{{$user->description}}</p>	
				</div>
				
				</br>
				
<button  class="bg-blue-600 text-blue-100 text-lg rounded hover:bg-blue-500 px-6 py-3 focus:outline-none"  value="back" onclick="history.back()" >Back To List</button>
  
  
  
  </div>

</div>
        </div>
    </div>
  </x-app-layout>
