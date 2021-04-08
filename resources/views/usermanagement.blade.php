@push('head')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@endpush
@push('head')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endpush
@push('head')
@end('head')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
@endpush
@push('head')
<script>
    $(document).ready(function() {
    $('#users').DataTable( {
        "columnDefs": [{
            "targets":[3],
            "orderable":false
        }]
    } );
} );
</script>
@endpush


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <table id="users">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>EMAIL ADDRESS</th>
                    <th>REGISTRATION DATE</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>John@gmail.com</td>
                    <td>07-04-2021</td>
                    <td><a href="#">Edit</a> <a href="#">Delete</a></td> 
                </tr>
                <tr>
                    <td>Nick</td>
                    <td>Nick@gmail.com</td>
                    <td>07-04-2021</td>
                    <td><a href="#">Edit</a> <a href="#">Delete</a></td>  
                </tr>
                <tr>
                    <td>Neha</td>
                    <td>Neha@gmail.com</td>
                    <td>07-04-2021</td>
                    <td><a href="#">Edit</a> <a href="#">Delete</a></td> 
                </tr>
                <tr>
                    <td>Riya</td>
                    <td>Riya@gmail.com</td>
                    <td>07-04-2021</td>
                    <td><a href="#">Edit</a> <a href="#">Delete</a></td> 
                </tr>
                <tr>
                    <td>Siya</td>
                    <td>Siya@gmail.com</td>
                    <td>07-04-2021</td>
                    <td><a href="#">Edit</a> <a href="#">Delete</a></td>  
                </tr>
                <tr>
                    <td>Eva</td>
                    <td>Eva@gmail.com</td>
                    <td>07-04-2021</td>
                    <td><a href="#">Edit</a> <a href="#">Delete</a></td>  
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>Maria@gmail.com</td>
                    <td>07-04-2021</td>
                    <td><a href="#">Edit</a> <a href="#">Delete</a></td>  
                </tr>
                <tr>
                    <td>Rahul</td>
                    <td>Rahul@gmail.com</td>
                    <td>07-04-2021</td>
                    <td><a href="#">Edit</a> <a href="#">Delete</a></td>  
                </tr>
                <tr>
                    <td>Rohit</td>
                    <td>Rohit@gmail.com</td>
                    <td>07-04-2021</td>
                    <td><a href="#">Edit</a> <a href="#">Delete</a></td>  
                </tr>
                <tr>
                    <td>Rohan</td>
                    <td>Rohan@gmail.com</td>
                    <td>07-04-2021</td>
                    <td><a href="#">Edit</a> <a href="#">Delete</a></td>  
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</x-app-layout>

