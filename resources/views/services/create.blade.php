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
            <select name="category_id" id="category" class="w-full p-2 rounded-md" required>
                <option value="">اختر فئة</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="details" class="block text-white">التفاصيل</label>
            <textarea name="details" id="details" class="w-full p-2 rounded-md"></textarea>
        </div>
        <div class="mb-4">
            <label for="location" class="block text-white">الموقع</label>
            <div id="map" style="height: 400px;" class="rounded-md"></div>
            <input type="hidden" name="latitude" id="latitude">
            <input type="hidden" name="longitude" id="longitude">
        </div>
        <button type="submit" class="bg-accent text-white p-3 rounded-md">حفظ</button>
    </form>
</div>

<!-- Include Leaflet.js and its CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize the map
        var map = L.map('map').setView([51.505, -0.09], 13);

        // Add OSM tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        // Add a marker on click
        var marker;
        map.on('click', function(e) {
            if (marker) {
                map.removeLayer(marker);
            }
            marker = L.marker(e.latlng).addTo(map);
            document.getElementById('latitude').value = e.latlng.lat;
            document.getElementById('longitude').value = e.latlng.lng;
        });
    });
</script>
@endsection 