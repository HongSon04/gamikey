<section class="section-product">
    <div class="section-product_title my-5">
        <h2 class="section-product_title_text d-flex justify-content-center"><strong class="me-2">Sản Phẩm
            </strong> Bán Chạy</h2>
    </div>
    <div class="section-product-items row">
        @php
            $products = \App\Models\Product::where('status', 1)
                ->with('category')
                ->orderBy('purchased', 'desc')
                ->limit(30)
                ->get(['image', 'slug', 'name', 'price', 'category_id', 'purchased']);
        @endphp
        @foreach ($products as $product)
            <div class="section-product-item col-xl-3 col-sm-6 col-md-4 col-6">
                <a href="{{ route('products.show', $product->slug) }}" class="section-product-anchor">
                    <div class="col-12 d-xl-flex border shadow-lg">
                        <div class="col-xl-6 section-product-left">
                            <img style="height: 162px; max-height: 162px;" loading="lazy" class="section-product-img" src="{{ asset($product->image) }}"
                                alt="">
                        </div>
                        <div class="col-xl-6 section-product-right p-2">
                            <div class="col-12 section-product-name">
                                <h3 class="product_name">{!! $product->name !!}</h3>
                            </div>
                            <div class="col-12 section-product-middle d-flex py-2 align-items-center">
                                <div class="col-6 section-product-categories d-flex align-items-center">
                                    <p>{!! $product->category->name !!}</p>
                                </div>
                                <div class="col-6 section-product-price d-flex justify-content-end">
                                    <i class="fas fa-shopping-cart fa-fw"></i>
                                    <h4 class="product_qty_purchared">{!! $product->purchased > 0 ? $product->purchased : 0!!}</h4>
                                </div>
                                <div class="line-separation"></div>
                            </div>
                            <div class="col-12">
                                <h4 class="product_price d-flex justify-content-center">{{ formatPrice($product->price) }}</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="section-product-action col-12 d-flex justify-content-center mt-3">
        <div id="loadMore">
            <div class="col-12 d-flex justify-content-center mb-2"><i
                    class="far fa-angle-double-down updownanimated"></i></div>
            <div class="col-12 section-product-action-name">Hiện Thêm</div>
        </div>
        <div id="showLess">
            <div class="col-12 d-flex justify-content-center mb-2"><i class="far fa-angle-double-up updownanimated"></i>
            </div>
            <div class="col-12 section-product-action-name">Ẩn Bớt</div>
        </div>
    </div>
</section>
