@extends('layouts.wiseintern')

@section('content')
    <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">Company Information</h1>
        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg overflow-hidden shadow-lg">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">Company Name</th>
                        <th class="py-3 px-6 text-left">Address</th>
                        <th class="py-3 px-6 text-left">Contact Info</th>
                        <th class="py-3 px-6 text-left">Website</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-200">ABC Corporation</td>
                        <td class="py-4 px-6 border-b border-gray-200">123 Main St, City, Country</td>
                        <td class="py-4 px-6 border-b border-gray-200">info@abccorp.com<br>+1 234 567 8901</td>
                        <td class="py-4 px-6 border-b border-gray-200"><a href="http://www.abccorp.com" target="_blank">www.abccorp.com</a></td>
                    </tr>
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-200">XYZ Ltd</td>
                        <td class="py-4 px-6 border-b border-gray-200">456 Oak St, Town, Country</td>
                        <td class="py-4 px-6 border-b border-gray-200">info@xyzltd.com<br>+1 987 654 3210</td>
                        <td class="py-4 px-6 border-b border-gray-200"><a href="http://www.xyzltd.com" target="_blank">www.xyzltd.com</a></td>
                    </tr>
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-200">LMN Enterprises</td>
                        <td class="py-4 px-6 border-b border-gray-200">789 Maple St, Village, Country</td>
                        <td class="py-4 px-6 border-b border-gray-200">info@lmnent.com<br>+1 123 456 7890</td>
                        <td class="py-4 px-6 border-b border-gray-200"><a href="http://www.lmnent.com" target="_blank">www.lmnent.com</a></td>
                    </tr>
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-200">PQR Co.</td>
                        <td class="py-4 px-6 border-b border-gray-200">321 Elm St, Hamlet, Country</td>
                        <td class="py-4 px-6 border-b border-gray-200">info@pqrco.com<br>+1 456 789 0123</td>
                        <td class="py-4 px-6 border-b border-gray-200"><a href="http://www.pqrco.com" target="_blank">www.pqrco.com</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
