@extends('front_layouts.app')

@section('content')
<div class="flex flex-col h-screen">
    <!-- Header with title -->
    {{-- <div class="bg-[#1b7f64] text-white p-4 shadow-md">
        <h1 class="text-2xl font-bold text-center">خريطة خدمات حلب</h1>
    </div> --}}

    <!-- Main content -->
    <div class="flex flex-col lg:flex-row flex-1 overflow-hidden">
        <!-- Sidebar for filters -->
        <div class="w-full lg:w-72 bg-white shadow-lg p-4 overflow-y-auto 
                    lg:h-[calc(100vh-8rem)] transition-all duration-300 ease-in-out
                    border-b lg:border-r border-gray-200">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-[#1b7f64]">تصفية الخدمات</h2>
                <button id="toggle-filters" class="lg:hidden text-[#1b7f64] hover:text-[#168c6a]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>
            <div id="service-filters" class="space-y-6 transition-all duration-300"></div>
        </div>

        <!-- Main map container -->
        <div class="flex-1 relative min-h-[60vh] lg:min-h-0">
            <div id="map" class="absolute inset-0"></div>
        </div>
    </div>
</div>
@endsection
