@extends('layouts.app')

@section('content')
<div class="flex-1 p-8 overflow-y-auto">
    <h1 class="text-3xl font-semibold text-accent mb-5">الفئات</h1>
    <a href="{{ route('categories.create') }}" class="bg-accent text-white p-3 rounded-md">إضافة فئة جديدة</a>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-5">
        @foreach($categories as $category)
        <div class="bg-secondary p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
            <h3 class="text-xl font-semibold text-white mb-4">{{ $category->name }}</h3>
            <a href="{{ route('categories.edit', $category) }}" class="text-accent">تعديل</a>
            <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500">حذف</button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection 