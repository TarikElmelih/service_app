import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

class MapContainer {
    constructor() {
        this.map = null;
        this.markers = [];
        this.initMap();
    }

    initMap() {
        // Initialize map centered on Aleppo
        this.map = L.map('map').setView([36.2021, 37.1343], 13);

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors'
        }).addTo(this.map);
    }

    addMarker(service) {
        const marker = L.marker([service.lat, service.lng])
            .bindPopup(`
                <div class="p-2">
                    <h3 class="font-bold">${service.name}</h3>
                    <p>${service.description}</p>
                    <p class="text-sm mt-2">
                        <strong>Type:</strong> ${service.type}<br>
                        <strong>Contact:</strong> ${service.contact}
                    </p>
                </div>
            `);
        
        marker.addTo(this.map);
        this.markers.push(marker);
    }

    clearMarkers() {
        this.markers.forEach(marker => marker.remove());
        this.markers = [];
    }
}

export default MapContainer;
