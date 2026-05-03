@extends('layouts.app')

@section('title', 'Danh mục sản phẩm: ' . $slug)

@section('content')

<div class="container py-2">
    <!-- Filter -->
    <div
        class="flex items-center gap-4 px-2 py-2 bg-gray-400 rounded">
        @foreach($filterGroups as $label => $options)
        <x-u-i.filter-dropdown :label="$label">
            @foreach($options as $option)
            <li>
                <a href="#!"
                    class="text-blue-400 hover:text-black transition-colors block px-4 py-2 border-b border-gray-200 text-sm">
                    {{ $option }}
                </a>
            </li>
            @endforeach
        </x-u-i.filter-dropdown>
        @endforeach
    </div>

    <!-- Product List  -->
    <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-4">
        @foreach($products as $product)
        <x-u-i.product-card :image="$product['image']"
            :title="$product['title']" :price="$product['price']"
            :slug="$product['slug']" :old-price="$product['oldPrice']"
            :is-hot="$product['isHot']" />
        @endforeach
    </div>
</div>
@endsection
