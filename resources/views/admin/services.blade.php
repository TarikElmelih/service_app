@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-[#1b7f64] mb-6">Manage Services</h1>
    <div class="bg-white rounded-lg shadow p-4 md:p-6">
        <div id="admin-map" class="h-[300px] md:h-[400px] mb-6"></div>
        <div id="service-list" class="space-y-4"></div>
    </div>
</div>
@endsection
