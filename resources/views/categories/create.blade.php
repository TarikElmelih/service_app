@extends('layouts.app')

@section('content')
<div class="flex-1 p-8 overflow-y-auto">
    <h1 class="text-3xl font-semibold text-accent mb-5">إضافة فئة جديدة</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-white">اسم الفئة</label>
            <input type="text" name="name" id="name" class="w-full p-2 rounded-md" required>
        </div>
        <button type="submit" class="bg-accent text-white p-3 rounded-md">حفظ</button>
    </form>
</div>
@endsection 