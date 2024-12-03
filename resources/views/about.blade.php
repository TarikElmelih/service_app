@extends('layouts.app')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-[#1b7f64] text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">عن خدمات حلب</h1>
                <p class="text-xl text-white/90 max-w-2xl mx-auto">
                    منصة تفاعلية تجمع كافة الخدمات في مدينة حلب لتسهيل الوصول إليها
                </p>
            </div>
        </div>
        <div class="absolute inset-0 opacity-10">
            <img src="{{ asset('images/aleppo-citadel.jpg') }}" alt="قلعة حلب" class="w-full h-full object-cover">
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center p-6 rounded-xl bg-gray-50">
                    <div class="w-16 h-16 bg-[#1b7f64]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#1b7f64]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">سهولة الوصول</h3>
                    <p class="text-gray-600">تحديد مواقع الخدمات بدقة على الخريطة</p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center p-6 rounded-xl bg-gray-50">
                    <div class="w-16 h-16 bg-[#1b7f64]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#1b7f64]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">تحديث مستمر</h3>
                    <p class="text-gray-600">معلومات محدثة باستمرار عن الخدمات المتوفرة</p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center p-6 rounded-xl bg-gray-50">
                    <div class="w-16 h-16 bg-[#1b7f64]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#1b7f64]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">مجتمع متفاعل</h3>
                    <p class="text-gray-600">تقييمات ومراجعات من المستخدمين</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 