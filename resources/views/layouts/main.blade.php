<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/all.css"> --}}
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bg-color.css">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js"></script>
    
</head>
<body>
    <div x-data="{ sidebarOpen: true }" class="w-screen h-screen flex">
        @include('components.sidebar')
        <div class="h-screen flex flex-col flex-1 w-full relative z-10">
            <div class="h-20 cursor-pointer w-8 ml-5 flex items-center flex items-center" @click="sidebarOpen = !sidebarOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 mt-2 " fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
            <main class="h-full pb-16 overflow-y-auto">
                <div class="w-full container grid px-6 mx-auto mt-12">
                    @yield('content')
                </div>
            </main>
            <div class="test absolute inset-0 z-0"></div>
        </div>
    </div>
    
    <style>
        .overflow-y-auto::-webkit-scrollbar {
            display: none;
        }
    </style>
    
    
    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>