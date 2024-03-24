<x-guest-layout>
    <div class="mx-16">

        <div class="flex flex-row-reverse">
            <!-- Using utilities: -->
            <a href="{{ route('product.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add
            </a>
        </div>
        <x-product-list :products="$products"></x-product-list>
    </div>
    {{-- @livewire('slider') --}}
</x-guest-layout>
