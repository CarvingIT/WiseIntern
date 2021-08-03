@extends('layouts.wiseintern')
@section('content')


<div class="px-12">
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
<input type="hidden" name="id" value="{{$users->id}}" />
<div class ="container">
<p class="text-xl">Title:-{{$users->title}} </p>
<p class="text-xl">Description:-{{$users->description}} </p>
<p>
 <button  class="bg-blue-600 text-blue-100 text-lg rounded hover:bg-blue-500 px-6 py-3 focus:outline-none"  value="back" onclick="history.back()" >Back To List</button>
<button type="button" class="btn btn-primary btn-lg">Apply</button>  

</p>

</div>
			<!-- Scripts -->
   <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.dropotron.min.js"></script>
    <script src="/js/browser.min.js"></script>
    <script src="/js/breakpoints.min.js"></script>
    <script src="/js/util.js"></script>
    <script src="/js/main.js"></script>

@endsection
