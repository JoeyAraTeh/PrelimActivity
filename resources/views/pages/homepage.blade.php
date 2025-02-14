@extends('layouts.app')

@section('content')
<div class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('/cover.png') }}'); background-repeat: no-repeat;">
    <div class="absolute inset-0  flex flex-col">
        <div class=" mt-96 ml-6">
            <a href="{{ route('services') }}" class="px-6 py-3 text-lg font-semibold bg-[#3D53CF] text-white rounded-lg shadow-md hover:bg-[#3345ad] transition duration-300">
                Explore Services
            </a>
            <a href="{{ route('contacts') }}" class="ml-4 px-6 py-3 text-lg font-semibold border border-[#3D53CF] text-[#3D53CF] rounded-lg hover:bg-[#3345ad] hover:text-white transition duration-300">
                Contact Us
            </a>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-semibold text-gray-800">Why Choose Us?</h2>
        <p class="text-lg text-[#3D53CF] mt-2">We provide top-quality cleaning services to ensure your space is spotless and hygienic.</p>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <img src="{{ asset('/staff.png') }}" class="mx-auto h-20" alt="Professional Staff">
                <h3 class="text-xl font-semibold mt-4 text-[#3D53CF]">Professional & Trained Staff</h3>
                <p class="text-gray-600 mt-2">Our team consists of skilled professionals who are trained to handle all cleaning tasks efficiently.</p>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6">
                <img src="{{ asset('/products.png') }}" class="mx-auto h-20" alt="Eco-Friendly">
                <h3 class="text-xl font-semibold mt-4 text-[#3D53CF]">Eco-Friendly Cleaning</h3>
                <p class="text-gray-600 mt-2">We use environmentally friendly cleaning products that are safe for your home and office.</p>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6">
                <img src="{{ asset('/satisfaction.png') }}" class="mx-auto h-20" alt="Satisfaction Guarantee">
                <h3 class="text-xl font-semibold mt-4 text-[#3D53CF]">100% Satisfaction Guarantee</h3>
                <p class="text-gray-600 mt-2">We ensure high-quality service and customer satisfaction with every cleaning session.</p>
            </div>
        </div>
    </div>
</div>

@endsection
