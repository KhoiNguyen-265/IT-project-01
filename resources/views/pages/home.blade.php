@extends('layouts.app')

@section('title', 'Cơ điện Hải Âu - Trang chủ')

@section('content')
<div class="container">
    <!-- Thumbnail -->
    <div>
        <img src="{{ Vite::asset('resources/images/home.jpg') }}"
            alt="Thumbnail">
    </div>

    <!-- List Products -->
    <div class="mt-4 bg-white">

        <x-sections.product-grid :products="$products" />
    </div>
</div>

@endsection