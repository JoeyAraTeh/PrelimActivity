<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav class="bg-[#3D53CF] py-4 shadow-lg">
    <div class="container mx-auto flex justify-end -ml-12   ">
        <ul class="flex space-x-8 text-white font-semibold">
            <li><a href="{{ url('/homepage') }}" class="hover:text-[#FCCC0C] transition duration-300">Home</a></li>
            <li><a href="{{ url('/services') }}" class="hover:text-[#FCCC0C] transition duration-300">Services</a></li>
            <li><a href="{{ url('/contacts') }}" class="hover:text-[#FCCC0C] transition duration-300">Contact</a></li>
        </ul>
    </div>
</nav>


    <div class="container">
        @yield('content')
    </div>

    <!-- <footer>
        <p>&copy; 2024 My Laravel App</p>
    </footer> -->
</body>
</html>
