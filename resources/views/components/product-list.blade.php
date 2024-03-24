@props(['products'])
<div class="relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        {{-- <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> --}}
                        <label for="checkbox-all-search" class="sr-only">S/No</label>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Product Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Unit Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantity In Stock
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            {{ $key + 1 }}
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $product->categoryType }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $product->productName }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $product->productDesc }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $product->unitPrice }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $product->quantityInStock }}
                    </td>
                    <td class="flex items-center px-6 py-4">
                        {{-- <x-dashboard.user-actions-dropdown  :user="$customer" /> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
