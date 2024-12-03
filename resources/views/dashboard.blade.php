@extends('layouts.app')

@section('content')
        <!-- Main Content -->
        <div class="flex-1 p-8 overflow-y-auto">
            <div class="mb-5 flex justify-between items-center">
                <!-- Header / Mobile Menu Toggle -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-white p-2 rounded bg-accent">
                        ☰
                    </button>
                </div>

                <div>
                    <h1 class="text-3xl font-semibold text-accent">لوحة القيادة</h1>
                </div>
            </div>

            <!-- Dashboard Content -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-secondary p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                    <h3 class="text-xl font-semibold text-white mb-4">مؤشر الأداء</h3>
                    <p class="text-sm text-white">محتوى الإحصائيات أو الرسوم البيانية هنا.</p>
                </div>
                <div class="bg-secondary p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                    <h3 class="text-xl font-semibold text-white mb-4">التقارير اليومية</h3>
                    <p class="text-sm text-white">محتوى التقارير اليومية أو الإحصائيات.</p>
                </div>
                <div class="bg-secondary p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                    <h3 class="text-xl font-semibold text-white mb-4">الإعدادات</h3>
                    <p class="text-sm text-white">محتوى الإعدادات أو خيارات التخصيص هنا.</p>
                </div>
            </div>
        </div>
    </div>
@endsection 
  