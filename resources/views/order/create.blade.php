<x-guest-layout>
    <div class="mx-16 flex justify-center">

        <form action="{{ route('order.store') }}" method="POST" class="w-9/12 max-w-lg">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                        Customer
                    </label>
                    <select
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" name="customerId" type="text" placeholder="Jane">
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->firstName }} {{ $customer->lastName }}
                            </option>
                        @endforeach
                    </select>
                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 md:w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Product
                    </label>
                    <select
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                         name="productId" placeholder="******************">
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">{{ $product->productName }}</option>
                        @endforeach
                    </select>
                    <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        Quantity
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-zip" name="quantityOrdered" type="number" placeholder="90210">
                </div>
            </div>
            <div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create
                </button>
            </div>
        </form>
    </div>
    {{-- @livewire('slider') --}}
</x-guest-layout>
