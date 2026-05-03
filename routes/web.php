<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;

Route::get('/', function () {
    $products = [
        [
            'title' => 'Đồng hồ cổ',
            'slug' => 'dong-ho-co',
            'price' => 2000000,
            'oldPrice' => 2500000,
            'image' => Vite::asset('resources/images/home.jpg'),
            'isHot' => true
        ],
        [
            'title' => 'Đèn vintage',
            'slug' => 'den-vintage',
            'price' => 1500000,
            'oldPrice' => 2000000,
            'image' => Vite::asset('resources/images/home.jpg'),
            'isHot' => false
        ],
        [
            'title' => 'Đồng hồ cổ',
            'slug' => 'dong-ho-co',
            'price' => 2000000,
            'image' => Vite::asset('resources/images/home.jpg'),
            'isHot' => false
        ],
        [
            'title' => 'Đèn vintage',
            'slug' => 'den-vintage',
            'price' => 1500000,
            'image' => Vite::asset('resources/images/home.jpg'),
            'isHot' => false
        ],
        [
            'title' => 'Đồng hồ cổ',
            'slug' => 'dong-ho-co',
            'price' => 2000000,
            'image' => Vite::asset('resources/images/home.jpg'),
            'isHot' => false
        ],
        [
            'title' => 'Đèn vintage',
            'slug' => 'den-vintage',
            'price' => 1500000,
            'image' => Vite::asset('resources/images/home.jpg'),
            'isHot' => false
        ],
    ];

    return view('pages.home', compact('products'));
})->name('home');


Route::get('/category/{slug}', function ($slug) {
    $filterGroups = [
        'Cảm biến' => [
            'Cảm biến áp suất', 'Cảm biến cửa', 'Cảm biến hình ảnh',
            'Cảm biến khoảng cách', 'Cảm biến lưu lượng', 'Cảm biến màu',
            'Cảm biến mức', 'Cảm biến nhiệt độ', 'Cảm biến quang',
            'Cảm biến siêu âm', 'Cảm biến sợi quang', 'Cảm biến tiệm cận',
            'Cảm biến tốc độ', 'Cảm biến van', 'Cảm biến vùng', 'Cảm biến xy lanh'
        ],
        'Thương hiệu' => [
            'Autonics', 'Hanyoung', 'Omron', 'Keyence', 'IFM'
        ],
        'Điện áp ngõ vào' => [
            '12-24VDC', '110-220VAC', '24VAC'
        ],
        'Ngõ ra' => [
            'NPN', 'PNP', 'Relay', '4-20mA'
        ],
        'Đường kính' => [
            'Phi 8 (M8)', 'Phi 12 (M12)', 'Phi 18 (M18)', 'Phi 30 (M30)'
        ]
    ];

    $products = [
    [
        'title' => 'Cảm biến tiệm cận Hanyoung UP18S-8NA 8mm NO-NPN 12-24V',
        'slug' => 'cam-bien-tiem-can-hanyoung-up18s-8na-8mm-no-npn-12-24v',
        'price' => 169000,
        'oldPrice' => 270000,
        'image' => Vite::asset('resources/images/home.jpg'),
        'isHot' => true
    ],
    [
        'title' => 'Cảm biến tiệm cận Autonics PSN17-5DN2 5mm NC-NPN 12-24VDC',
        'slug' => 'cam-bien-tiem-can-autonics-psn17-5dn2-5mm-nc-npn-12-24vdc',
        'price' => 231000,
        'oldPrice' => 423360,
        'image' => Vite::asset('resources/images/home.jpg'),
        'isHot' => true
    ],
    [
        'title' => 'Cảm biến quang Autonics BS5-L2M (thu phát)',
        'slug' => 'cam-bien-quang-autonics-bs5-l2m-thu-phat',
        'price' => 121000,
        'oldPrice' => 221400,
        'image' => Vite::asset('resources/images/home.jpg'),
        'isHot' => false
    ],
    [
        'title' => 'Cảm biến tiệm cận Omron E2E-X10D1-N 10mm NO-NPN 12-24VDC',
        'slug' => 'cam-bien-tiem-can-omron-e2e-x10d1-n-10mm-no-npn-12-24vdc',
        'price' => 149000,
        'oldPrice' => 250000,
        'image' => Vite::asset('resources/images/home.jpg'),
        'isHot' => false
    ],
    [
        'title' => 'Cảm biến tiệm cận Keyence PR-MB30 30mm NO-NPN 12-24VDC',
        'slug' => 'cam-bien-tiem-can-keyence-pr-mb30-30mm-no-npn-12-24vdc',
        'price' => 1500000,
        'oldPrice' => null,
        'image' => Vite::asset('resources/images/home.jpg'),
        'isHot' => true
    ],
    [
        'title' => 'Cảm biến siêu âm IFM O5D100 100mm NO-NPN 12-24VDC',
        'slug' => 'cam-bien-sieu-am-ifm-o5d100-100mm-no-npn-12-24vdc',
        'price' => 1200000,
        'oldPrice' => null,
        'image' => Vite::asset('resources/images/home.jpg'),
        'isHot' => false
    ],
    ];

    return view('pages.category', compact('filterGroups','products', 'slug'));
})->name('category');

Route::get('product/{slug}', function ($slug) {
    $product = [
        'title' => 'Cảm biến tiệm cận Hanyoung UP18S-8NA 8mm NO-NPN 12-24V',
        'slug' => 'cam-bien-tiem-can-hanyoung-up18s-8na-8mm-no-npn-12-24v',
        'price' => 169000,
        'oldPrice' => 270000,
        'image' => Vite::asset('resources/images/home.jpg'),
        'category_name' => 'Cảm biến',
        'category_slug' => 'cam-bien',
        'description' => 'Cảm biến tiệm cận Hanyoung UP18S-8NA 8mm NO-NPN 12-24V là một thiết bị cảm biến được sử dụng để phát hiện sự hiện diện hoặc vắng mặt của vật thể trong phạm vi hoạt động của nó. Với đường kính 8mm, cảm biến này có khả năng phát hiện các vật thể nhỏ và có độ chính xác cao. Nó hoạt động với điện áp từ 12 đến 24VDC và có ngõ ra NPN, giúp dễ dàng tích hợp vào hệ thống tự động hóa của bạn.'
    ];

    return view('pages.product-detail', compact('product', 'slug'));
})->name('product.detail');
