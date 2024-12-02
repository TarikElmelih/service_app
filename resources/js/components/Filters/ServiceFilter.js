class ServiceFilter {
    constructor(onFilterChange) {
        this.onFilterChange = onFilterChange;
        this.filters = {
            type: [],
            area: '',
            status: 'all'
        };
        this.initializeFilters();
        this.setupMobileToggle();
    }

    initializeFilters() {
        const filterContainer = document.getElementById('service-filters');
        if (!filterContainer) return;

        filterContainer.innerHTML = `
            <div class="space-y-8 rtl">
                <!-- Service Type Filter -->
                <div class="filter-group bg-gray-50/50 p-4 rounded-xl border border-gray-100">
                    <h3 class="text-[#1b7f64] font-semibold mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        نوع الخدمة
                    </h3>
                    <div class="space-y-3">
                        ${this.createCheckbox('medical', 'طبية', 'hospital')}
                        ${this.createCheckbox('education', 'تعليمية', 'academic-cap')}
                        ${this.createCheckbox('government', 'حكومية', 'office-building')}
                    </div>
                </div>

                <!-- Area Filter -->
                <div class="filter-group bg-gray-50/50 p-4 rounded-xl border border-gray-100">
                    <h3 class="text-[#1b7f64] font-semibold mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        المنطقة
                    </h3>
                    ${this.createModernSelect('area', [
                        { value: '', label: 'كل المناطق' },
                        { value: 'old-city', label: 'المدينة القديمة' },
                        { value: 'new-city', label: 'المدينة الجديدة' },
                        { value: 'suburbs', label: 'الضواحي' }
                    ])}
                </div>

                <!-- Status Filter -->
                <div class="filter-group bg-gray-50/50 p-4 rounded-xl border border-gray-100">
                    <h3 class="text-[#1b7f64] font-semibold mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        الحالة
                    </h3>
                    ${this.createModernSelect('status', [
                        { value: 'all', label: 'الكل' },
                        { value: 'active', label: 'نشط' },
                        { value: 'inactive', label: 'غير نشط' }
                    ])}
                </div>
            </div>
        `;

        this.attachEventListeners();
    }

    createCheckbox(value, label, icon) {
        return `
            <label class="flex items-center gap-3 p-2 rounded-lg cursor-pointer hover:bg-white transition-all group">
                <input type="checkbox" value="${value}" 
                       class="form-checkbox h-5 w-5 text-[#1b7f64] rounded-md border-gray-300
                       focus:ring-[#1b7f64] transition duration-150 ease-in-out">
                <span class="text-gray-700 group-hover:text-[#1b7f64] transition-colors">${label}</span>
            </label>
        `;
    }

    createModernSelect(name, options) {
        return `
            <div class="relative">
                <select name="${name}" 
                        class="w-full appearance-none bg-white border border-gray-200 rounded-lg px-4 py-2.5
                               text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#1b7f64] focus:border-transparent
                               transition-all cursor-pointer hover:border-[#1b7f64]">
                    ${options.map(opt => `
                        <option value="${opt.value}" class="py-2">${opt.label}</option>
                    `).join('')}
                </select>
                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>
        `;
    }

    setupMobileToggle() {
        const toggleButton = document.getElementById('toggle-filters');
        const filtersContainer = document.getElementById('service-filters');
        
        if (toggleButton && filtersContainer) {
            toggleButton.addEventListener('click', () => {
                filtersContainer.classList.toggle('hidden');
                toggleButton.querySelector('svg').classList.toggle('rotate-180');
            });
        }
    }

    attachEventListeners() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const selects = document.querySelectorAll('select');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => this.updateFilters());
        });

        selects.forEach(select => {
            select.addEventListener('change', () => this.updateFilters());
        });
    }

    updateFilters() {
        const typeCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked');
        const areaSelect = document.querySelector('select:nth-of-type(1)');
        const statusSelect = document.querySelector('select:nth-of-type(2)');

        this.filters.type = Array.from(typeCheckboxes).map(cb => cb.value);
        this.filters.area = areaSelect.value;
        this.filters.status = statusSelect.value;

        this.onFilterChange(this.filters);
    }
}

export default ServiceFilter;
