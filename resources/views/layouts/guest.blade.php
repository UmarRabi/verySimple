<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    @stack('styles')
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.remove('dark');
            document.querySelector('html').style.colorScheme = 'light';
        } else {
            document.querySelector('html').classList.add('dark');
            document.querySelector('html').style.colorScheme = 'dark';
        }
    </script>
</head>

<body class="font-inter antialiased bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400">

    <main class="bg-white">

        <!-- Content -->
        <div class="w-full">

            <div class="min-h-screen h-full">
                <div>
                    <navbar class="fixed px-24 min-h-[80px] top-0 z-10 bg-[#3c5139] flex place-items-center w-full">
                        <div class="md:hidden py-4 px-8 flex justify-between">
                            <div class="text-xl">Logo</div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                    class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </div>
                        </div>
                        {{-- <a href="{{ route('customer.index') }}">
                            <img class="h-[100px]" src="{{ asset('images/logo.png') }}" alt="">
                        </a> --}}

                        <div class="w-full flex flex-row-reverse text-white gap-2 py-3 shadow-md">
                            <div>
                                <!--Public links-->
                                <ul class="inline-grid grid-cols-6 gap-x-4">
                                    <li class="cursor-pointer"><a href="{{ route('customer.index') }}">Customers</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('product.index') }}">
                                            Products
                                        </a>
                                    </li>


                                    <li>
                                        <a href="{{ route('order.index') }}">
                                            Order
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('rep.index') }}">
                                            Sales Rep.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('log.index') }}">
                                            Deleted Order
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </navbar>
                </div>

                <div class="w-full mx-auto mt-32 px-4 py-8">
                    {{ $slot }}
                </div>

            </div>

        </div>

        </div>

    </main>
    @stack('scripts')
</body>

</html>
