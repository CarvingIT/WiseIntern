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
                <i class="fas fa-arrow-left mr-2"></i> Back
            </a>
            <h2 class="font-semibold text-lg text-gray-800 leading-tight">Edit Project</h2>
        </div>
    </x-slot>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-4"> <!-- Adjusted width to make the box 0.75 times smaller -->
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <!-- Card on the left side -->
                    <div class="md:col-span-1 bg-transparent overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-3 sm:p-4"> <!-- Reduced padding -->
                            <h3 class="text-lg font-semibold leading-7 text-gray-900">Edit Project</h3>
                        </div>
                    </div>

                    <!-- Card on the right side containing the form -->
                    <div class="md:col-span-2 bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-3 sm:p-4"> <!-- Reduced padding -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('projects.update', $project->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <!-- Larger container for the form content -->
                                <div class="w-full">
                                    <div class="space-y-4">
                                        <div>
                                            <label for="name" class="block text-base font-medium leading-5 text-gray-900">Name</label>
                                            <div class="mt-1">
                                                <input id="name" name="name" type="text" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-base sm:leading-5" placeholder="Name" value="{{ $project->name }}">
                                            </div>
                                        </div>

                                        <div>
                                            <label for="detail" class="block text-base font-medium leading-5 text-gray-900">Detail</label>
                                            <div class="mt-1">
                                                <textarea id="detail" name="detail" rows="3" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-base sm:leading-5" placeholder="Enter project details">{{ $project->detail }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit button at the right end of the card -->
                                    <div class="flex justify-end mt-4">
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Submit</button>
                                    </div>
                                </div>
                                <!-- End of larger container -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
