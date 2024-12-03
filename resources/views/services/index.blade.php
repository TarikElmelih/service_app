@extends('layouts.app')

@section('content')
<div class="flex-1 p-8 overflow-y-auto">
    <h1 class="text-3xl font-semibold text-accent mb-5">الخدمات</h1>
    <a href="{{ route('services.create') }}" class="bg-accent text-white p-3 rounded-md">إضافة خدمة جديدة</a>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-5">
        @foreach($services as $service)
        <div class="bg-secondary p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
            <h3 class="text-xl font-semibold text-white mb-4">{{ $service->name }}</h3>
            <p class="text-sm text-white">{{ $service->category }}</p>
            <p class="text-sm text-white">{{ $service->details }}</p>
            <a href="{{ route('services.edit', $service) }}" class="text-accent">تعديل</a>
            <form action="{{ route('services.destroy', $service) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500">حذف</button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection 