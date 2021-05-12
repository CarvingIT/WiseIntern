<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project Form') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-8 lg:px-10 ">
            <div class="overflow-hidden shadow-xl sm:rounded-lg">
            <div class="w-full max-w-xs">
</div>

            <form class="bg-white rounded px-8 pt-6 pb-8 mb-4 align=center w-full ">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
        Title
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Title">
    </div>
    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="Description">
        Description
      </label>
      <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>
     
</textarea>
</div>
    
    
<div class="inline-flex">
<div class="flex space-x-4 ...">
<button type="button" class="bg-blue-600 text-blue-100 text-lg rounded hover:bg-blue-500 px-6 py-3 focus:outline-none">Save</button>
      <button type="button" class="bg-gray-600 text-gray-100 text-lg rounded hover:bg-gray-500 px-6 py-3 focus:outline-none">Cancel</button>

    </div>
</div>
    
    </div>
  </form>
</div>
        </div>
    </div>
</div>
</x-app-layout>
