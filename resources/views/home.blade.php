@extends('front_layouts.app')

@section('content')
    <!-- Main Container -->
    <div class="flex flex-col md:flex-row p-4">
        <!-- Sidebar with filters -->
        <div class="bg-background p-4 rounded-lg shadow-md mb-4 md:mb-0 md:w-1/4 text-right">
            <h2 class="text-lg font-semibold mb-4 text-primary">تصفية الخدمات</h2>
            <div>
                <label class="block text-sm font-medium text-secondary">اختر الفئة</label>
                <select id="categoryFilter" class="mt-1 block w-full p-2 border rounded-md shadow-sm bg-white text-gray-700">
                    <option value="all">جميع الفئات</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Map container -->
        <div class="flex-1 p-4">
            <div id="map"></div>
        </div>
    </div>

    

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        // Initialize map with center in Aleppo, Syria (36.2028, 37.1343)
        const map = L.map('map').setView([36.2028, 37.1343], 13); 

        // Add OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Service data from Laravel
        const services = @json($services);

        // Marker layers
        const markers = [];

        // Add all services to the map
        function addMarkers(filterCategory = 'all') {
            // Clear previous markers
            markers.forEach(marker => marker.remove());
            markers.length = 0; // Reset array

            services.forEach(service => {
                // Check if the service belongs to the selected category or if it's "all"
                if (filterCategory === 'all' || service.category_id == filterCategory) {
                    const marker = L.marker([service.latitude, service.longitude]).addTo(map)
                        .bindPopup(`<strong>${service.name}</strong><br>الفئة: ${service.category.name}`);
                    markers.push(marker);
                }
            });
        }

        // Initial map markers (no filter)
        addMarkers();

        // Filter event listener
        document.getElementById('categoryFilter').addEventListener('change', function() {
            const selectedCategory = this.value;
            addMarkers(selectedCategory);
        });

        // Mobile menu toggle
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');

        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
@endsection