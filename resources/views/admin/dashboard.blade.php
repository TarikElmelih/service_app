@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-[#1b7f64] mb-6">Admin Dashboard</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
        <div class="bg-white rounded-lg shadow p-4 md:p-6">
            <h2 class="text-lg md:text-xl font-semibold mb-4">Services Overview</h2>
            <p class="text-gray-600">Manage and monitor all services</p>
            <a href="{{ route('admin.services') }}" class="btn-primary mt-4 inline-block">
                Manage Services
            </a>
        </div>
    </div>
</div>
@endsection
