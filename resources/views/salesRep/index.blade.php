<x-guest-layout>
    <div class="mx-16">

        <div class="flex flex-row-reverse">
            <!-- Using utilities: -->
            <a href="{{ route('rep.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add
            </a>
        </div>
        <x-salesrep-list :salesreps="$salesReps"></x-salesrep-list>
    </div>
    {{-- @livewire('slider') --}}
</x-guest-layout>
