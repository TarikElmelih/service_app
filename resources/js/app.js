import './bootstrap';
import { initMap, initAdminMap } from './map';
import MapContainer from './components/Map/MapContainer';
import ServiceFilter from './components/Filters/ServiceFilter';

document.addEventListener('DOMContentLoaded', () => {
    const mapContainer = new MapContainer();
    
    const handleFilterChange = (filters) => {
        // Here we'll add the logic to fetch filtered services from the backend
        // For now, let's just console.log the filters
        console.log('Filters changed:', filters);
    };

    const serviceFilter = new ServiceFilter(handleFilterChange);

    if (document.getElementById('map')) {
        initMap();
    }
    if (document.getElementById('admin-map')) {
        initAdminMap();
    }
});
