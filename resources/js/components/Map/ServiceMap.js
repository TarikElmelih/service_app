class ServiceMap {
    constructor() {
        this.map = null;
        this.markers = [];
        this.services = {
            medical: [
                { 
                    lat: 36.2021, 
                    lng: 37.1343, 
                    title: 'مشفى الجامعة', 
                    type: 'medical',
                    phone: '021-2234567',
                    email: 'info@aleppo-university-hospital.sy'
                },
                { 
                    lat: 36.1982, 
                    lng: 37.1495, 
                    title: 'مشفى الرازي', 
                    type: 'medical',
                    phone: '021-2234568',
                    email: 'info@razi-hospital.sy'
                }
            ],
            education: [
                { 
                    lat: 36.2104, 
                    lng: 37.1377, 
                    title: 'جامعة حلب', 
                    type: 'education',
                    phone: '021-2234569',
                    email: 'info@aleppo-university.edu.sy'
                }
            ],
            government: [
                { 
                    lat: 36.2016, 
                    lng: 37.1347, 
                    title: 'مبنى المحافظة', 
                    type: 'government',
                    phone: '021-2234570',
                    email: 'info@aleppo.gov.sy'
                }
            ]
        };
    }

    initializeMap() {
        this.map = L.map('map').setView([36.2021, 37.1343], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(this.map);
    }

    updateMarkers(filters) {
        // إزالة كل النقاط الحالية
        this.clearMarkers();

        // إضا لم يتم تحديد أي تصنيف، اعرض جميع النقاط
        if (filters.type.length === 0) {
            Object.values(this.services).forEach(services => {
                services.forEach(service => {
                    this.addMarker(service);
                });
            });
            return;
        }

        // اعرض النقاط حسب التصنيفات المحددة
        filters.type.forEach(type => {
            if (this.services[type]) {
                this.services[type].forEach(service => {
                    this.addMarker(service);
                });
            }
        });
    }

    addMarker(service) {
        const popupContent = `
            <div class="p-3 min-w-[200px]">
                <h3 class="text-lg font-bold text-[#1b7f64] mb-2">${service.title}</h3>
                <div class="space-y-2 text-sm">
                    <p class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                        <span class="text-gray-600">التصنيف: ${this.getArabicType(service.type)}</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="text-gray-600">هاتف: ${service.phone || 'غير متوفر'}</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-gray-600">البريد: ${service.email || 'غير متوفر'}</span>
                    </p>
                </div>
            </div>
        `;

        const marker = L.marker([service.lat, service.lng])
            .bindPopup(popupContent, {
                maxWidth: 300,
                className: 'service-popup'
            })
            .addTo(this.map);
        
        marker.getElement().classList.add(`marker-${service.type}`);
        this.markers.push(marker);
    }

    getArabicType(type) {
        const types = {
            medical: 'طبي',
            education: 'تعليمي',
            government: 'حكومي'
        };
        return types[type] || type;
    }

    clearMarkers() {
        this.markers.forEach(marker => marker.remove());
        this.markers = [];
    }
}

export default ServiceMap; 