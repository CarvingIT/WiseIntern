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
        <div class="flex justify-between items-center">
            <a class="btn btn-create" href="{{ route('projects.index') }}">
                <i class="fas fa-arrow-left mr-2" style="color: #000;"></i> Back
            </a>
            <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                Show Project
            </h2>
        </div>
    </x-slot>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <!-- Card on the left side -->
                    <div class="md:col-span-1 bg-transparent overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-3 sm:p-4"> <!-- Reduced padding -->
                            <h3 class="text-lg font-semibold leading-7 text-gray-900">Show Project</h3>
                        </div>
                    </div>

                    <!-- Card on the right side containing the form -->
                    <div class="md:col-span-2 bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-3 sm:p-4"> <!-- Reduced padding -->
                            <div class="card">
                                <div class="card-header">
                                    <h2>   </h2>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 150px;">Name:</th>
                                                    <td>{{ $project->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Details:</th>
                                                    <td>{{ $project->detail }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
