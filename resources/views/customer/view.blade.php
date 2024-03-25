<x-guest-layout>
    <div class="mx-16">

        <div class="mx-16 grid grid-cols-3 gap-8 my-8">
            <!-- Using utilities: -->
            <div>
              Firstname:  {{ $customer->firstName }}
            </div>
            <div>
              Lastname:  {{ $customer->lastName }}
            </div>
            <div>
               Email: {{ $customer->email }}
            </div>
            <div>
               State: {{ $customer->state }}
            </div>
            <div>
               City: {{ $customer->city }}
            </div>
            <div>
               Address: {{ $customer->add1 }}
            </div>
        </div>
        <x-order-list :orders="$customer->orders"></x-order-list>
    </div>
    {{-- @livewire('slider') --}}
</x-guest-layout>
