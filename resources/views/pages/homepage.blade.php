@extends('layouts.app')

@section('content')
<div class="relative bg-cover bg-center h-[500px]" style="background-image: url('{{ asset('/carcover.png') }}'); background-repeat: no-repeat;">
    <!-- <div class="absolute inset-0  flex flex-col">
        <div class=" mt-96 ml-6">
            <a href="{{ route('services') }}" class="px-6 py-3 text-lg font-semibold bg-[#3D53CF] text-white rounded-lg shadow-md hover:bg-[#3345ad] transition duration-300">
                Explore Services
            </a>
            <a href="{{ route('contacts') }}" class="ml-4 px-6 py-3 text-lg font-semibold border border-[#3D53CF] text-[#3D53CF] rounded-lg hover:bg-[#3345ad] hover:text-white transition duration-300">
                Contact Us
            </a>
        </div>
    </div> -->
</div>

<!-- Booking Details -->
<div class="container mx-auto px-4 relative -mt-5 z-10">
    <div class="bg-white shadow-lg rounded-lg p-4 flex flex-wrap md:flex-nowrap items-center gap-4">
        <!-- Pick-Up Location -->
        <div class="flex-1 min-w-[200px]">
            <label for="pickup" class="block text-sm font-semibold text-gray-700">Pick-Up Location</label>
            <input type="text" id="pickup" class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-blue-300" placeholder="Enter location">
        </div>

        <!-- Drop-Off Location -->
        <div class="flex-1 min-w-[200px]">
            <label for="dropoff" class="block text-sm font-semibold text-gray-700">Drop-Off Location</label>
            <input type="text" id="dropoff" class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-blue-300" placeholder="Enter location">
        </div>

        <!-- Date Range Picker -->
        <div class="flex-1 min-w-[220px]">
            <label for="date-range" class="block text-sm font-semibold text-gray-700">Pick-up & Drop-off Date</label>
            <input type="text" id="date-range" class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-blue-300" placeholder="Select date">
        </div>

        <!-- Pickup Time -->
        <div class="w-[12%]">
            <label class="block text-gray-700 text-sm font-semibold">Pickup Time</label>
            <input type="time" class="mt-1 w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-300">
        </div>

        <!-- Drop-off Time -->
        <div class="w-[12%]">
            <label class="block text-gray-700 text-sm font-semibold">Drop-off Time</label>
            <input type="time" class="mt-1 w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-300">
        </div>

        <!-- Find a Car Button (Aligned in the Same Row) -->
        <div class="w-auto flex items-end">
            <button class="flex items-center bg-[#333333] text-white px-6 py-2 rounded-lg shadow-md hover:bg-[#555555] transition mt-6">
                Find a Car
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M16 10.5a5.5 5.5 0 1 0-11 0 5.5 5.5 0 0 0 11 0z" />
                </svg>
            </button>
        </div>
    </div>
</div>


<link rel="stylesheet" href="{{ asset('node_modules/flatpickr/dist/flatpickr.min.css') }}">
<script src="{{ asset('node_modules/flatpickr/dist/flatpickr.js') }}"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Initialize Flatpickr for Date Range -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        flatpickr("#date-range", {
            mode: "range",  
            dateFormat: "M d",
            minDate: "today",  
            showMonths: 2,  
        });
    });
</script>

<!-- Features Section -->
<section class="flex flex-col justify-center items-center text-center py-12 mt-20">
    <h2 class="text-3xl font-bold text-[#333333] mb-8">Why Choose FLEXIDRIVE?</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
        <div class="flex flex-col items-center">
            <img src="{{ asset('/keypoints/flexible.png') }}" alt="Flexibility Icon" class="h-12 mb-3" />
            <h3 class="text-xl font-semibold text-[#333333]">Flexibility in Travel</h3>
            <p class="mt-1 text-base text-[#706C61] text-center">Choose between self-drive or chauffeur-driven experiences for full control of your journey.</p>
        </div>
        <div class="flex flex-col items-center">
            <img src="{{ asset('/keypoints/affordable.png') }}" alt="Affordable Icon" class="h-12 mb-3" />
            <h3 class="text-xl font-semibold text-[#333333]">Affordable Solutions</h3>
            <p class="mt-1 text-base text-[#706C61] text-center">Tailored travel options for budget-conscious travelers, including students and professionals.</p>
        </div>
        <div class="flex flex-col items-center">
            <img src="{{ asset('/keypoints/ufriendly.png') }}" alt="User-Friendly Icon" class="h-12 mb-3" />
            <h3 class="text-xl font-semibold text-[#333333]">User-Friendly Booking</h3>
            <p class="mt-1 text-base text-[#706C61] text-center">A seamless and easy-to-use booking experience, giving you the convenience you deserve.</p>
        </div>
    </div>
</section>


@endsection