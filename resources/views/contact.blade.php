@extends('layouts.app')

@section('content')
<div class="bg-white py-16">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-[#1b7f64] mb-4">اتصل بنا</h1>
            <p class="text-gray-600">نحن هنا للإجابة على استفساراتكم ومساعدتكم</p>
        </div>

        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">الاسم</label>
                <input type="text" name="name" id="name" required 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#1b7f64] focus:ring-[#1b7f64]">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">البريد الإلكتروني</label>
                <input type="email" name="email" id="email" required 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#1b7f64] focus:ring-[#1b7f64]">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">الرسالة</label>
                <textarea name="message" id="message" rows="4" required
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#1b7f64] focus:ring-[#1b7f64]"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" 
                        class="inline-flex justify-center py-2 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#1b7f64] hover:bg-[#168c6a] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#1b7f64]">
                    إرسال الرسالة
                </button>
            </div>
        </form>
    </div>
</div>
@endsection 