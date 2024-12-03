   <!-- Sidebar (Mobile Responsive) -->
   <div class="w-64 bg-primary p-5 hidden md:block">
            <h2 class="text-2xl font-semibold text-white mb-8">لوحة القيادة</h2>
            <ul class="space-y-4">
                <li><a href="/dashboard" class="block p-3 text-white hover:bg-accent rounded-md transition-all">الرئيسية</a></li>
                <li><a href="/services" class="block p-3 text-white hover:bg-accent rounded-md transition-all"> الخدمات</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block p-3 text-white hover:bg-accent rounded-md transition-all">تسجيل الخروج</a></li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
