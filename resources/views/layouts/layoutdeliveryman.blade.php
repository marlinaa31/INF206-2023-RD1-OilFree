<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @yield('script')
    </head>
    <body>
        <button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
        </button>

        <aside id="separator-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-yellow-900">
            <ul class="space-y-2 font-bold">
                <li>
                    <a href="#" class="flex items-center p-2 hover:bg-gray-100">
                    <span class="ml-3 text-leaf">Oil Free</span>
                    </a>
                </li>
                <hr>
                <li>
                    <a href="#" class="flex items-center p-2 hover:text-black hover:bg-gray-100 dark:hover:bg-gray-700">                    
                    <span class="flex-1 ml-3 whitespace-nowrap">Riwayat</span>                    
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 hover:text-black hover:bg-gray-100 dark:hover:bg-gray-700">
                    <span class="flex-1 ml-3 whitespace-nowrap">Pesanan</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 hover:text-black hover:bg-gray-100 dark:hover:bg-gray-700">
                    <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        </aside>

        <div class="p-4 sm:ml-64">
            

            @yield('content')
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    </body>
</html>