@extends('layouts.app')

@section('content')
<div class="flex-1 p-8 overflow-y-auto">
    <h1 class="text-3xl font-semibold text-primary mb-5">الخدمات</h1>
    <a href="{{ route('services.create') }}" class="bg-primary text-white px-4 py-2 rounded-lg">إضافة خدمة جديدة</a>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-5">
        @foreach($services as $service)
        <div class="bg-light p-8 rounded-xl shadow-md hover:shadow-lg transition-all" style="width: 320px;">
            <div id="map-{{ $service->id }}" style="height: 180px;" class="rounded-md mb-4"></div>
            <h3 class="text-lg font-semibold text-accent mb-2">{{ $service->name }}</h3>
            <p class="text-sm text-gray-700 mb-1">{{ $service->category->name }}</p>
            <p class="text-sm text-gray-600 mb-3">{{ $service->details }}</p>
            <div class="flex justify-between items-center">
                <a href="{{ route('services.edit', $service) }}" class="text-primary underline">تعديل</a>
                <form action="{{ route('services.destroy', $service) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 underline">حذف</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Include Leaflet.js and its CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        @foreach($services as $service)
        var map{{ $service->id }} = L.map('map-{{ $service->id }}').setView([{{ $service->latitude }}, {{ $service->longitude }}], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map{{ $service->id }});
        L.marker([{{ $service->latitude }}, {{ $service->longitude }}]).addTo(map{{ $service->id }});
        @endforeach
    });
</script>
@endsection
