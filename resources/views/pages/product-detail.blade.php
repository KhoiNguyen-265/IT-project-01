@extends('layouts.app')

@section('title', 'Chi tiết sản phẩm ' . $product['title'])

@section('content')

<div class="container">
    <div class="bg-white py-4">
        <!-- Breadcrumb -->
        <nav class="text-sm border-b border-gray-400 border-t">
            <ol class="list-reset flex text-gray-500 p-4">
                <li>
                    <a href="{{ route('home') }}"
                        class="hover:text-blue-600 transition-colors">Trang
                        chủ</a>
                </li>
                <li><span class="mx-2">/</span></li>

                <li>
                    <a href="{{ route('category', ['slug' => $product['category_slug']]) }}"
                        class="hover:text-blue-600 transition-colors">
                        {{ $product['category_name'] }}
                    </a>
                </li>
                <li><span class="mx-2">/</span></li>

                <li class="text-gray-800 font-medium line-clamp-1"
                    title="{{ $product['title'] }}">
                    {{ $product['title'] }}
                </li>
            </ol>
        </nav>

        <!-- Product Details -->
        <div class="flex flex-col lg:flex-row gap-2 px-2 py-3">
            <!-- Left Column -->
            <div class="lg:w-3/4">
                <div class=" flex flex-col gap-2 md:flex-row">
                    <!-- Product Image -->
                    <div class="md:w-1/2 ">
                        <img src="{{ $product['image'] }}"
                            alt="{{ $product['title'] }}"
                            class="w-full object-cover h-full">
                    </div>

                    <!-- Product Information -->
                    <div class="md:w-1/2 text-sm">
                        <!-- Title -->
                        <h1 class="font-bold text-[16px]">
                            {{ $product['title'] }}</h1>

                        <!-- Price -->
                        @if($product['oldPrice'])
                        <div
                            class="p-3 mt-3 border border-dashed border-[#199bc4] bg-[#199bc42e] flex flex-col gap-2">
                            <p>
                                Giá: <strong
                                    class="text-red-500 text-lg font-bold whitespace-nowrap">{{ number_format($product['price'], 0, ',', '.') }}₫</strong>
                            </p>
                            <p>
                                Thị trường: <span
                                    class="text-gray-400 text-sm line-through whitespace-nowrap mb-1">
                                    {{ number_format($product['oldPrice'], 0, ',', '.') }}₫
                                </span>
                                (Giảm
                                {{ round(100 - ($product['price'] / $product['oldPrice'] * 100)) }}%)
                            </p>
                        </div>
                        @else
                        <div class="p-3">
                            <p>
                                Giá: <strong
                                    class="text-red-500 font-bold whitespace-nowrap">{{ number_format($product['price'], 0, ',', '.') }}₫</strong>
                            </p>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Tabs -->
                <div x-data="{ activeTab: 'description' }"
                    class="mt-8">

                    <!-- Các nút Tab -->
                    <div class="flex border-b border-gray-300">
                        <button @click="activeTab = 'description'"
                            :class="activeTab === 'description' ? 'bg-[#00b0f0] text-white font-semibold' : 'bg-white hover:bg-gray-50'"
                            class="px-6 py-2.5 text-[14px] transition cursor-pointer border-t border-l border-r border-transparent">
                            Mô tả
                        </button>
                        <button @@click="activeTab = 'specs'"
                            :class="activeTab === 'specs' ? 'bg-[#00b0f0] text-white font-semibold' : 'bg-white hover:bg-gray-50'"
                            class="px-6 py-2.5 text-[14px] transition cursor-pointer border-t border-l border-r border-transparent">
                            Thông tin bổ sung
                        </button>
                    </div>

                    <!-- Nội dung Tabs -->
                    <div class="mt-4 border border-gray-200 p-4">

                        <!-- Tab Mô tả -->
                        <div x-show="activeTab === 'description'"
                            class="text-[14px] text-gray-700 leading-relaxed">
                            {{ $product['description'] }}
                        </div>

                        <!-- Tab Thông số kỹ thuật -->
                        <div x-show="activeTab === 'specs'" x-cloak>
                            <table
                                class="w-full text-[14px] text-left border-collapse">
                                <tbody
                                    class="[&>tr:nth-child(even)]:bg-[#f9f9f9]">
                                    <tr
                                        class="border-b border-gray-100">
                                        <td
                                            class="py-3 px-4 w-1/3 italic text-gray-600">
                                            Model</td>
                                        <td
                                            class="py-3 px-4 w-2/3 text-[#0077cc]">
                                            UP18S-8NA</td>
                                    </tr>
                                    <!-- Thêm các thông số khác tại đây -->
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div
                class="bg-green-200 w-full lg:w-1/4 h-48 flex items-center justify-center text-gray-700 font-bold">
                Banner
            </div>
        </div>
    </div>
</div>

@endsection
