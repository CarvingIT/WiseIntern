@push('head')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://kit.fontawesome.com/e3dc723f7b.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
    $('#users').DataTable( {
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
            {{ __('Project Lists') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

		<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
		<div class="mt-6 text-gray-900">
		<div class="table-responsive">
        <table id="users" class="display">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Created(Date)</th>
                    <th>Created By</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>XYZ</td>
                    <td>07-04-2021</td>
                    <td>John</td>
                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td> 
                </tr>
                <tr>
                    <td>Nick</td>
                    <td>07-04-2021</td>
                    <td>Nick</td>
                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td>   
                </tr>
                <tr>
                    <td>Neha</td>
                    <td>07-04-2021</td>
                    <td>Neha</td>
                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td> 
                </tr>
                <tr>
                    <td>Riya</td>
                    <td>07-04-2021</td>
                    <td>Riya</td>
                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td> 
                </tr>
                <tr>
                    <td>Siya</td>
                    <td>07-04-2021</td>
                    <td>Siya</td>
                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td>  
                </tr>
                <tr>
                    <td>Eva</td>
                    <td>07-04-2021</td>
                    <td>Eva</td>
                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td>  
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>07-04-2021</td>
                    <td>Maria</td>
                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td>  
                </tr>
                <tr>
                    <td>Rahul</td>
                    <td>07-04-2021</td>
                    <td>Rahul</td>
                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td> 
                </tr>
                <tr>
                    <td>Rohit</td>
                    <td>07-04-2021</td>
                    <td>Rohit</td>
                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td> 
                </tr>
                <tr>
                    <td>Rohan</td>
                    <td>07-04-2021</td>
                    <td>Rohan</td>
                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td>  
                </tr>
                <tr>
                    <td>Rohan</td>
                    <td>07-04-2021</td>
                    <td>Rohan</td>
                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td>  
                </tr>
                <tr>
                    <td>Rohan</td>
                    <td>07-04-2021</td>
                    <td>Rohan</td>
                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td>  
                </tr>
                <tr>
                    <td>Rohan</td>
                    <td>07-04-2021</td>
                    <td>Rohan</td>
                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td>  
                </tr>
            </tbody>
        </table>
		</div><!-- table-responsive -->
		</div><!-- mt-6 -->
		</div><!-- p-6 -->
    </div>
</div>
</div>
</x-app-layout>
