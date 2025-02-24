<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('app-title')</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen bg-slate-100">    
    <header class="bg-blue-600 text-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo -->
            <a href="/" class="text-xl font-bold">--MyApp--</a>

            <!-- Navigation -->
            <nav class="space-x-6">
                <a href="{{route('posts.index')}}" class="bg-slate-300 text-blue-900 p-2 rounded-lg">Posts</a>
                <a href="{{route('users.index')}}" class="bg-slate-300 text-blue-900 p-2 rounded-lg">Users</a>
            </nav>
        </div>
    </header>
        <!-- Main Content -->
        <main class="flex-grow container mx-auto p-6">
            <h1 class="text-2xl text-center font-semibold">@yield('app-title')</h1>
            <p>@yield('body')</p>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-gray-300 text-center p-4">
            <span id="year"></span> MyApp. All rights reserved.</p>
        </footer>
    </body>
</html>