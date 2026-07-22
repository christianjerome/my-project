    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>        


<table class="table-auto w-full border">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
    </thead>

    <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['code'] }}</td>
                <td>{{ $product['description'] }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No products found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="max-w-5xl mx-auto mt-10">

    @if(session('success'))
        <div class="mb-6 rounded border border-green-300 bg-green-100 p-4 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="mb-6 rounded border border-red-300 bg-red-100 p-4 text-red-700">
            {{ session('error') }}
        </div>
    @endif

    <div class="rounded-lg bg-white shadow">

        <div class="border-b px-6 py-4">
            <h2 class="text-xl font-semibold">
                Create Product
            </h2>
        </div>

        <form action="{{ url('/products') }}" method="POST">

            @csrf

            <div class="grid grid-cols-2 gap-6 p-6">

                <!-- Product Code -->
                <div>
                    <label class="mb-2 block text-sm font-medium">
                        Product Code
                    </label>

                    <input
                        type="text"
                        name="code"
                        value="{{ old('code') }}"
                        class="w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200">

                    @error('code')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Size -->
                <div>
                    <label class="mb-2 block text-sm font-medium">
                        Size
                    </label>

                    <input
                        type="text"
                        name="size"
                        value="{{ old('size') }}"
                        class="w-full rounded-md border border-gray-300 px-3 py-2">
                </div>

                <!-- Description -->
                <div class="col-span-2">

                    <label class="mb-2 block text-sm font-medium">
                        Description
                    </label>

                    <textarea
                        name="description"
                        rows="3"
                        class="w-full rounded-md border border-gray-300 px-3 py-2">{{ old('description') }}</textarea>

                </div>

                <!-- Quantity -->
                <div>

                    <label class="mb-2 block text-sm font-medium">
                        Quantity
                    </label>

                    <input
                        type="number"
                        name="quantity"
                        value="{{ old('quantity') }}"
                        class="w-full rounded-md border border-gray-300 px-3 py-2">

                </div>

                <!-- Status -->
                <div>

                    <label class="mb-2 block text-sm font-medium">
                        Status
                    </label>

                    <select
                        name="status"
                        class="w-full rounded-md border border-gray-300 px-3 py-2">

                        <option value="">Select Status</option>

                        <option value="Active">Available</option>
                        <option value="Inactive">Low Stock</option>

                    </select>

                </div>

                <!-- Hidden ID -->
                <input
                    type="hidden"
                    name="id"
                    value="{{ old('id') }}">

            </div>

            <div class="flex justify-end gap-3 border-t bg-gray-50 px-6 py-4">

                <button
                    type="reset"
                    class="rounded-md bg-gray-500 px-5 py-2 text-white hover:bg-gray-600">
                    Clear
                </button>

                <button
                    type="submit"
                    class="rounded-md bg-blue-600 px-5 py-2 text-white hover:bg-blue-700">
                    Save Product
                </button>

            </div>

        </form>

    </div>

</div>
            </div>
        </div>
    </div>
    
</x-app-layout>
