<div
    class="relative bg-white rounded-xl shadow p-4 hover:scale-105 transition-all duration-300">

    @if($isHot)
    <div class="absolute rounded-tl-[inherit] top-0 left-0 bg-[#35b8e0] text-white text-[11px] italic px-2 py-0.5 pr-4 z-10"
        style="clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);">
        Nhiều người mua
    </div>
    @endif

    <a
        href="{{ $slug ? route('product.detail', ['slug' => $slug]) : '#' }}">
        <!-- Product Image -->
        <img src="{{ $image }}"
            class="w-full h-48 object-cover rounded-lg"
            alt="Sản phẩm">

        <!-- Product Title -->
        <h3
            class="mt-3 font-semibold text-sm hover:text-blue-600 transition-colors duration-300">
            {{ $title }}
        </h3>
    </a>

    <!-- Price -->
    <div
        class="flex items-center pt-4 mt-auto justify-between gap-1 text-sm">
        <p class="text-red-500 underline font-bold whitespace-nowrap">
            {{ number_format($price, 0, ',', '.') }}₫
        </p>

        @if($oldPrice)
        <p
            class="text-gray-400 text-[12px] line-through whitespace-nowrap mb-1">
            {{ number_format($oldPrice, 0, ',', '.') }}₫
        </p>
        @endif
    </div>
</div>
