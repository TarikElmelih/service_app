@extends('layouts.app')

@section('content')
<div class="flex-1 p-8 overflow-y-auto">
    <h1 class="text-3xl font-semibold text-accent mb-5">إضافة خدمة جديدة</h1>
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-white">اسم الخدمة</label>
            <input type="text" name="name" id="name" class="w-full p-2 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="category" class="block text-white">الفئة</label>
            <input type="text" name="category" id="category" class="w-full p-2 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="details" class="block text-white">التفاصيل</label>
            <textarea name="details" id="details" class="w-full p-2 rounded-md"></textarea>
        </div>
        <button type="submit" class="bg-accent text-white p-3 rounded-md">حفظ</button>
    </form>
</div>
@endsection 