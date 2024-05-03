<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center w-100">
            <h2 class="font-semibold text-xl text-black leading-tight" style="background-color: transparent; padding: 10px;">
                {{ __('Project Management') }}
            </h2>
            <a class="btn btn-create" href="{{ route('projects.create') }}"><i class="fas fa-plus" style="color: #000;"></i></a>
        </div>
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projects</title>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- DataTables CSS -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <!-- Custom CSS -->
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .container {
                margin-top: 50px;
            }
            .btn-create {
                background-color: transparent;
                border: none;
                color: #000;
                font-size: 1.2rem;
            }
            .btn-create:hover {
                color: #555;
            }
            .table {
                background-color: #4B5563;
                color: #FFFFFF;
            }
            .table th {
                color: #FFFFFF;
            }
            .btn-info, .btn-primary, .btn-delete {
                background-color: transparent;
                border: none;
            }
            .table td {
                color: #000000;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @if ($message = Session::get('success'))
                <div class="alert alert-success mt-3">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="table-responsive mt-4">
                <table id="users" class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>NAME</th>
                            <th>DETAILS</th>
                            <th width="280px">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->detail }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Actions">
                                        <a class="btn btn-info" href="{{ route('projects.show',$project->id) }}"><i class="fas fa-eye" style="color: #000;"></i></a>
                                        <a class="btn btn-primary" href="{{ route('projects.edit',$project->id) }}"><i class="fas fa-edit" style="color: #000;"></i></a>
                                        <form action="{{ route('projects.destroy',$project->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-delete"><i class="fas fa-trash-alt" style="color: #000;"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $projects->links() }}
            </div>
        </div>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <!-- Font Awesome JS -->
        <script src="https://kit.fontawesome.com/e3dc723f7b.js" crossorigin="anonymous"></script>
        <!-- Custom JavaScript -->
        <script>
            $(document).ready(function() {
                $('#users').DataTable( {
                    "columnDefs": [{
                        "targets":[2],
                        "orderable":false,
                        "className":"text-right",
                    }]
                } );
            });
        </script>
    </body>
    </html>
</x-app-layout>