@extends('layouts.app')

@section('content')
<div class="flex-1 p-8 overflow-y-auto">
    <h1 class="text-3xl font-semibold text-accent mb-5">{{ $service->name }}</h1>
    <div class="bg-secondary p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold text-white mb-4">الفئة: {{ $service->category }}</h3>
        <p class="text-sm text-white">التفاصيل: {{ $service->details }}</p>
    </div>
    <a href="{{ route('services.edit', $service) }}" class="bg-accent text-white p-3 rounded-md mt-5 inline-block">تعديل</a>
    <form action="{{ route('services.destroy', $service) }}" method="POST" class="inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 text-white p-3 rounded-md">حذف</button>
    </form>
</div>
@endsection 