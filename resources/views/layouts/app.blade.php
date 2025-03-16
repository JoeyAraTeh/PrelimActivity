<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Add Google Font for Bold and Sophisticated Look -->
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">

<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


</head>
<body>

<!-- Navigation Bar -->
<nav class="absolute top-0 left-0 w-full bg-[#70717554] py-4 shadow-lg z-10">
    <div class="container mx-auto flex items-center justify-between px-6">
        
        <!-- Left Section (Logo + Name) -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('/logo.png') }}" alt="Logo" class="h-12"> 
            <span class="text-white text-2xl font-bold tracking-wide" style="font-family: 'Oswald', sans-serif;">
                FLEXIDRIVE
            </span>
        </div>

        <!-- Right Section (Navigation Links) -->
        <ul class="flex space-x-8 text-white text-md font-semibold">
            <li><a href="{{ url('/homepage') }}" class="hover:text-[#333333] transition duration-300">Home</a></li>
            <li><a href="{{ url('/services') }}" class="hover:text-[#333333] transition duration-300">Services</a></li>
            <li><a href="{{ url('/contacts') }}" class="hover:text-[#333333] transition duration-300">Contact</a></li>
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
