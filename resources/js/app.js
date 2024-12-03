import './bootstrap';

import Alpine from 'alpinejs';

import ServiceMap from './components/Map/ServiceMap';
import ServiceFilter from './components/Filters/ServiceFilter';

document.addEventListener('DOMContentLoaded', () => {
    if (document.getElementById('map')) {
        const map = new ServiceMap();
        const filter = new ServiceFilter();

        map.initializeMap();
        filter.initializeFilters();
        filter.map = map;
    }
});


window.Alpine = Alpine;

Alpine.start();

