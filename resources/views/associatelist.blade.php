@stack('head')
@push('head')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/css/all.min.css" />
<link rel="stylesheet" href="/css/jquery-ui.css" />
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://kit.fontawesome.com/e3dc723f7b.js" crossorigin="anonymous"></script>
<script src="/js/jquery-ui.js" defer></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#associates').DataTable( {
        "columnDefs": [{
            "targets":[3],
            "orderable":false,
            "className":"text-right",
        }]
    } );
} );
    function showDeleteDialog(id){
$('#delete_id').val(id);
$("#deletedialog").dialog({
        title:'Are you sure?',
        dialogClass: "alert"
});
}


</script>

@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Associates List') }}
        </h2>
    </x-slot>
	

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
                   @if(Session::has('alert-' . $msg))
		        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    				<div class="mt-6 text-gray-900 leading-7 font-semibold ">
                        		<span @if($msg == 'danger') style="color:red" @endif>{{ Session::get('alert-' . $msg) }}</span>
				</div>
                        </div>
                   @endif
               @endforeach

		<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
		<div class="mt-6 text-gray-900">
		<div class="table-responsive">
		<div class="row">
                  <div class="col-12 text-right">
                    <a href="/admin/associate-form/new" class="btn btn-sm btn-primary" title="Add New Associate"><i class="fa fa-plus" aria-hidden="true"></i></i></a></i></a>
                  </div>
                </div>
				</br>
		
        <table id="associates" class="display table responsive">
            <thead>
                <tr>
					<th>Id</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Address</th>
					<th>Email</th>
					<th>Phone1</th>
					<th>Phone2</th>
                    <th class="text-right">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach($associates as $associate)
				<tr>
				<td>{{$associate->id}}</td>
				<td>{{$associate->name}}</td>
				<td>{{$associate->type}}</td>
				<td>{{$associate->address}}</td>
				<td>{{$associate->email}}</td>
				<td>{{$associate->phone1}}</td>
				<td>{{$associate->phone2}}</td>
				<td>
				<a href="{{"/admin/associate-view/".$associate['id']}}" ><i class="fa fa-eye" aria-hidden="true"></i></a>
				<a href="{{"/admin/associate-form/".$associate['id']}}" ><i class="fa fa-edit" aria-hidden="true"></i></a>
				<button  id="opener"  onclick=" showDeleteDialog({{$associate->id}});"><span class="fas fa-trash-alt"></span></button>

            <div id="deletedialog" style="display:none;" class="bg-grey">
                
                <form name="deletedoc" method="post" action="/admin/associate/delete">
                @csrf
			
                <input type="hidden" id="delete_id" name="id" value="{{ $associate->id }}" />
                        This action can not be undone.
                        <div class="flex items-center justify-end px-4 py-3 sm:px-6">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 m-1" wire:loading.attr="disabled">Delete</button>
                        <button type="button" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 m-1" wire:loading.attr="disabled" onclick="document.location='/admin/associatelist/';">Cancel</button>
                        </div>
                </form>

           </div>


		   	</td>
				
				@endforeach
				
            </tbody>
        </table>
		</div><!-- table-responsive -->
		</div><!-- mt-6 -->
		</div><!-- p-6 -->
    </div>
</div>
</div>
</x-app-layout>
