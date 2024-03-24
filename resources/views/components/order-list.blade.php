@props(['orders'])
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
                    Customer Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Product Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantity Ordered
                </th>
                <th scope="col" class="px-6 py-3">
                    Order Total
                </th>
                <th scope="col" class="px-6 py-3">
                    Order Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $key => $order)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            {{ $key + 1 }}
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $order->customer->firstName }} {{ $order->customer->lastName }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $order->product->productName }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->quantityOrdered }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->orderTotal }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->orderDate }}
                    </td>
                    <td class="flex items-center px-6 py-4">
                        @if (!$order->orderId)
                        <form id="delete-order-form" action="{{ route('order.destroy', $order) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>

                        <a href="#" onclick="event.preventDefault(); document.getElementById('delete-order-form').submit();"
                            class="bg-red-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
