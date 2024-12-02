// Initialize the map
let map = null;

function initMap() {
    // Create map instance
    map = L.map('map').setView([36.2021, 37.1343], 13); // Aleppo coordinates

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Add zoom control
    map.zoomControl.setPosition('topright');
}

// Initialize admin map if it exists
function initAdminMap() {
    if (document.getElementById('admin-map')) {
        map = L.map('admin-map').setView([36.2021, 37.1343], 13);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        map.zoomControl.setPosition('topright');
    }
}

// Export functions
export { initMap, initAdminMap }; 