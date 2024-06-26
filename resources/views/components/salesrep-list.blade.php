@props(['salesreps'])
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
                    First Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Last Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Store Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salesreps as $key => $salesRep)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            {{ $key + 1 }}
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $salesRep->firstName }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $salesRep->lastName }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $salesRep->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $salesRep->storeNumber }}
                    </td>
                    <td class="flex items-center px-6 py-4">
                        <form id="delete-order-form" action="{{ route('rep.destroy', $salesRep) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        <a href="#"
                            onclick="event.preventDefault(); document.getElementById('delete-order-form').submit();"
                            class="bg-red-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
