@php
$menus = [
[
'name' => 'Tự Động & Điều Khiển',
'children' => [
['name' => 'Cảm Biến', 'link' => '/category/cam-bien'],
['name' => 'PLC', 'link' => '/category/plc'],
['name' => 'Màn Hình HMI', 'link' => '/category/man-hinh-hmi'],
['name' => 'I/O', 'link' => '/category/i-o'],
['name' => 'Encoder', 'link' => '/category/encoder'],
['name' => 'Bộ Đếm / Counter', 'link' => '/category/bo-dem-counter'],
['name' => 'Công Tắc Hành Trình', 'link' =>
'/category/cong-tac-hanh-trinh'],
['name' => 'Timer', 'link' => '/category/timer'],
['name' => 'Rơ Le Trung Gian', 'link' =>
'/category/ro-le-trung-gian'],
['name' => 'Rơ Le Bán Dẫn', 'link' => '/category/ro-le-ban-dan'],
]
],
[
'name' => 'Động Cơ & Thiết Bị Bảo Vệ',
'children' => [
['name' => 'Động Cơ Điện', 'link' => '/category/dong-co-dien'],
['name' => 'Biến Tần', 'link' => '/category/bien-tan'],
['name' => 'Khởi Động Từ', 'link' => '/category/khoi-dong-tu'],
['name' => 'Bộ Bảo Vệ Động Cơ', 'link' =>
'/category/bo-bao-ve-dong-co'],
['name' => 'Bộ Điều Khiển Tốc Độ', 'link' =>
'/category/bo-dieu-khien-toc-do'],
]
],
[
'name' => 'Thiết Bị Đo Kiểm',
'children' => [
['name' => 'Đồng Hồ Áp Suất', 'link' => '/category/dong-ho-ap-suat '],
['name' => 'Đồng Hồ Nhiệt Độ', 'link' =>
'/category/dong-ho-nhiet-do'],
['name' => 'Đồng Hồ Lưu Lượng', 'link' =>
'/category/dong-ho-luu-luong'],
['name' => 'Đồng Hồ Đo Điện', 'link' => '/category/dong-ho-do-dien'],
]
],
[
'name' => 'Vật Tư Tủ Điện',
'children' => [
['name' => 'Cầu Chì', 'link' => '/category/cau-chì'],
['name' => 'Cầu Dao', 'link' => '/category/cau-dao'],
['name' => 'Thanh Đồng Cái', 'link' => '/category/thanh-dong-cai'],
['name' => 'Thanh Đồng Dương', 'link' =>
'/category/thanh-dong-duong'],
['name' => 'Thanh Đồng Trung Tính', 'link' =>
'/category/thanh-dong-trung-tinh'],
]
],
[
'name' => 'Khí Nén',
'children' => [
['name' => 'Xilanh Khí Nén', 'link' => '/category/xilanh-khi-nen'],
['name' => 'Van Khí Nén', 'link' => '/category/van-khi-nen'],
['name' => 'Bộ Lọc Khí Nén', 'link' => '/category/bo-loc-khi-nen'],
['name' => 'Bộ Điều Áp Khí Nén', 'link' =>
'/category/bo-dieu-ap-khi-nen'],
]
],
[
'name' => "Điện Dân Dụng",
'children' => [
["name" => "Ổ Cắm", "link" => "/category/so-cam"],
["name" => "Công Tắc", "link" => "/category/cong-tac"],
["name" => "Đèn", "link" => "/category/den"],
["name" => "Quạt", "link" => "/category/quat"],
]
],
[
'name' => 'Solar',
'children' => [
['name' => 'Tấm Pin Mặt Trời', 'link' =>
'/category/tam-pin-mat-troi'],
['name' => 'Bộ Điều Khiển Sạc', 'link' =>
'/category/bo-dieu-khien-sac'],
['name' => 'Inverter', 'link' => '/category/inverter'],
['name' => 'Ắc Quy', 'link' => '/category/ac-quy'],
]
]
];
@endphp

<header class="sticky top-0 z-50 bg-blue-500 ">
    <div
        class="px-5 flex items-center gap-3 justify-center mx-auto py-1 ">
        <!-- Search Bar -->
        <div
            class="flex items-center gap-1.5 px-2 py-1 bg-white rounded-sm">
            <!-- logo -->
            <a href="/">Hải Âu</a>

            <!-- Search -->
            <div class="relative border rounded-sm">
                <input class="outline-none px-2 py-2 text-sm"
                    type="text">
                <a href="#!"
                    class="absolute top-1/2 -translate-y-1/2 right-2 text-[#888] hover:text-black transition-all duration-300">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="flex items-center ">
            <ul class="flex items-center">
                <li>
                    <a href="#!" class="nav__link">Thương Hiệu</a>
                </li>

                @foreach($menus as $menu)
                <li>
                    <x-ui.dropdown :label="$menu['name']">
                        @foreach($menu['children'] as $child)
                        <a href="{{ $child['link'] }}"
                            class="block px-4 py-2 hover:bg-white hover:text-black">
                            {{ $child['name'] }}
                        </a>
                        @endforeach
                    </x-ui.dropdown>
                </li>
                @endforeach
            </ul>
        </nav>

        <a href="#!" class="text-white text-xl">
            <i class="fa-solid fa-cart-shopping"></i>
        </a>
    </div>
</header>
