@extends('layouts.wiseintern')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Information</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-4">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Company Information</h1>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Company Name</th>
                    <th class="border border-gray-300 px-4 py-2">Address</th>
                    <th class="border border-gray-300 px-4 py-2">Contact Info</th>
                    <th class="border border-gray-300 px-4 py-2">Website</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">ABC Corporation</td>
                    <td class="border border-gray-300 px-4 py-2">123 Main St, City, Country</td>
                    <td class="border border-gray-300 px-4 py-2">123-456-7890</td>
                    <td class="border border-gray-300 px-4 py-2"><a href="https://www.example.com" class="text-blue-600">www.example.com</a></td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">XYZ Ltd.</td>
                    <td class="border border-gray-300 px-4 py-2">456 Elm St, City, Country</td>
                    <td class="border border-gray-300 px-4 py-2">456-789-0123</td>
                    <td class="border border-gray-300 px-4 py-2"><a href="https://www.xyzcompany.com" class="text-blue-600">www.xyzcompany.com</a></td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">LMN Enterprises</td>
                    <td class="border border-gray-300 px-4 py-2">789 Oak St, City, Country</td>
                    <td class="border border-gray-300 px-4 py-2">789-012-3456</td>
                    <td class="border border-gray-300 px-4 py-2"><a href="https://www.lmnenterprises.com" class="text-blue-600">www.lmnenterprises.com</a></td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">PQR Industries</td>
                    <td class="border border-gray-300 px-4 py-2">987 Pine St, City, Country</td>
                    <td class="border border-gray-300 px-4 py-2">987-654-3210</td>
                    <td class="border border-gray-300 px-4 py-2"><a href="https://www.pqrindustries.com" class="text-blue-600">www.pqrindustries.com</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>

@endsection