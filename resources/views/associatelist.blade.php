@push('head')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://kit.fontawesome.com/e3dc723f7b.js" crossorigin="anonymous"></script>
<script src="/js/jquery-ui.js" defer></script>
<script>
    $(document).ready(function() {
    $('#associates').DataTable( {
        "columnDefs": [{
            "targets":[3],
            "orderable":false,
            "className":"text-right",
        }]
    } );
	

} );
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

		<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
		<div class="mt-6 text-gray-900">
		<div class="table-responsive">
		@csrf
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
				<a href="{{"/admin/associate-view/".$associate['id']}}" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
				<a href="{{"/admin/associate-form/".$associate['id']}}" ><i class="fa fa-edit" aria-hidden="true"></i></a>
				<a href="{{"delete/".$associate['id']}}" onclick="return confirm('You Want To Delete?');"><i class="fas fa-trash-alt" aria-hidden="true"></i></a>


				
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
