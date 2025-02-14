@extends('layouts.app')

@section('content')
<div class="relative h-64 flex items-center justify-center text-white" 
    style="background: url('{{ asset('/servicescov.png') }}') no-repeat center center; background-size: contain;">
    <div class="w-full h-full flex flex-col items-center justify-center text-center text-[#3D53CF]">
        <h1 class="text-4xl font-bold">Cleaning Services</h1>
        <p class="mt-4 text-lg">Providing top-notch cleaning solutions for homes & businesses.</p>
    </div>
</div>


<div class="container mx-auto py-12 px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @php
            $services = [
                ['image' => '/homecleaning.png', 'title' => 'Home Cleaning', 'desc' => 'Expert cleaning to keep your home fresh and spotless.'],
                ['image' => '/office.png', 'title' => 'Office Cleaning', 'desc' => 'A clean workspace for better productivity and hygiene.'],
                ['image' => '/deep.png', 'title' => 'Deep Cleaning', 'desc' => 'Thorough cleaning for a germ-free, healthier environment.'],
                ['image' => '/carpet.png', 'title' => 'Carpet Cleaning', 'desc' => 'Remove stains & dirt for a fresh and hygienic carpet.'],
                ['image' => '/window.png', 'title' => 'Window Cleaning', 'desc' => 'Crystal-clear windows for a brighter space.'],
                ['image' => '/moving.png', 'title' => 'Move-In/Move-Out Cleaning', 'desc' => 'Stress-free transition with our detailed cleaning service.'],
            ];
        @endphp

        @foreach ($services as $service)
        <div class="relative bg-cover bg-center h-56 rounded-lg shadow-md overflow-hidden flex items-center justify-center text-center" 
            style="background-image: url('{{ asset($service['image']) }}');">
            <div class="absolute inset-0 bg-white bg-opacity-75 rounded-lg"></div>
            <div class="relative z-10 p-4">
                <h3 class="text-xl font-bold text-[#3D53CF]">{{ $service['title'] }}</h3>
                <p class="text-gray-700 mt-1 text-sm">{{ $service['desc'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
