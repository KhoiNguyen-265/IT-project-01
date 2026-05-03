<section class="py-10">
    <div class="max-w-7xl mx-auto px-4">

        <x-ui.section-heading title="Sản phẩm nổi bật"
            icon="fa-solid fa-arrows-to-dot" />

        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
            <x-ui.product-card :image="$product['image']"
                :title="$product['title']" :price="$product['price']"
                :old-price="$product['oldPrice'] ?? null"
                :is-hot="$product['isHot'] ?? false"
                :slug="$product['slug']" />
            @endforeach
        </div>

    </div>
</section>