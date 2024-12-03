@extends('layouts.app')

@section('content')
<div class="flex-1 p-8 overflow-y-auto">
    <h1 class="text-3xl font-semibold text-accent mb-5">تعديل الخدمة</h1>
    <form action="{{ route('services.update', $service) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-white">اسم الخدمة</label>
            <input type="text" name="name" id="name" value="{{ $service->name }}" class="w-full p-2 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="category" class="block text-white">الفئة</label>
            <input type="text" name="category" id="category" value="{{ $service->category }}" class="w-full p-2 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="details" class="block text-white">التفاصيل</label>
            <textarea name="details" id="details" class="w-full p-2 rounded-md">{{ $service->details }}</textarea>
        </div>
        <button type="submit" class="bg-accent text-white p-3 rounded-md">تحديث</button>
    </form>
</div>
@endsection 