<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body>
   
   <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-xl font-bold">Logo</a>
            <ul class="flex space-x-6">
                <x-link-item href="/" :active="Route::currentRouteName() === 'homepage' ? true : false" class="underline">Homepage</x-link-item>
                <x-link-item href="/projects" :active="Route::currentRouteName() === 'projects' ? true : false">Projects</x-link-item>
            </ul>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>
    @yield('scriptys')
</body>
</html>