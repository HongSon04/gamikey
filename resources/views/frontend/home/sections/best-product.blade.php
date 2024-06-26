<section class="section-new-product py-5">
    <div class="section_tab_product col-12 d-lg-flex">
        <div class="col-lg-6 section-product_title d-flex d-lg-block justify-content-center mb-4 mb-lg-0">
            <h2 class="section-product_title_text"><strong class="me-2">Sản Phẩm </strong> Bán Chạy</h2>
        </div>
        <div
            class="col-lg-6 section_tab_product_right tab_new_product d-flex d-flex justify-content-center mb-4 mb-lg-0 justify-content-lg-end">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Tài Khoản</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Nâng Cấp</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Mã Kích Hoạt</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled"
                        aria-selected="false">Cracked</button>
                </li>
            </ul>
        </div>
    </div>
    <!-- ************************* TAB NEW PRODUCT ************************* -->

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <section class="section-product">
                <div class="col-12 section-product-items">
                    <div class="section-product-items row">
                        @php
                            $products = \App\Models\Product::where('status', 1)
                                // ->where('slug_type', 'tai-khoan')
                                ->with('category')
                                ->orderBy('purchased', 'desc')
                                ->limit(30)
                                ->get(['image', 'slug', 'name', 'price', 'category_id']);
                        @endphp
                        @foreach ($products as $product)
                            <div class="section-product-item col-xl-3 col-sm-6 col-md-4 col-6">
                                <a href="{{ route('products.show', $product->slug) }}" class="section-product-anchor">
                                    <div class="col-12 d-xl-flex border shadow-lg">
                                        <div class="col-xl-6 section-product-left">
                                            <img style="height: 165px; max-height:165px;" loading="lazy"
                                                class="section-product-img" src="{{ asset($product->image) }}"
                                                alt="">
                                        </div>
                                        <div class="col-xl-6 section-product-right p-2">
                                            <div class="col-12 section-product-name">
                                                <h3 class="product_name">{!! $product->name !!}</h3>
                                            </div>
                                            <div class="col-12 section-product-middle d-flex py-2 align-items-center">
                                                <div class="col-6 section-product-categories d-flex align-items-center">
                                                    <p>{{ $product->category->name }}</p>
                                                </div>
                                                <div class="col-6 section-product-price d-flex justify-content-end">
                                                    <i class="fas fa-shopping-cart fa-fw"></i>
                                                    <h4 class="product_qty_purchared">{{ $product->purchased }}</h4>
                                                </div>
                                                <div class="line-separation"></div>
                                            </div>
                                            <div class="col-12">
                                                <h4 class="product_price d-flex justify-content-center">
                                                    {{ formatPrice($product->price) }}
                                                </h4>
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
                                    class="far fa-angle-double-down updownanimated"></i>
                            </div>
                            <div class="col-12 section-product-action-name">Hiện Thêm</div>
                        </div>
                        <div id="showLess">
                            <div class="col-12 d-flex justify-content-center mb-2"><i
                                    class="far fa-angle-double-up updownanimated"></i>
                            </div>
                            <div class="col-12 section-product-action-name">Ẩn Bớt</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <section class="section-product">
                <div class="col-12 section-product-items">
                    <div class="section-product-items row">
                        @php
                            $products = \App\Models\Product::where('status', 1)
                                // ->where('slug_type', 'tai-khoan')
                                ->with('category')
                                ->orderBy('purchased', 'desc')
                                ->limit(30)
                                ->get(['image', 'slug', 'name', 'price', 'category_id']);
                        @endphp
                        @foreach ($products as $product)
                            <div class="section-product-item col-xl-3 col-sm-6 col-md-4 col-6">
                                <a href="{{ route('products.show', $product->slug) }}" class="section-product-anchor">
                                    <div class="col-12 d-xl-flex border shadow-lg">
                                        <div class="col-xl-6 section-product-left">
                                            <img style="height: 165px; max-height:165px;" loading="lazy"
                                                class="section-product-img" src="{{ asset($product->image) }}"
                                                alt="">
                                        </div>
                                        <div class="col-xl-6 section-product-right p-2">
                                            <div class="col-12 section-product-name">
                                                <h3 class="product_name">{!! $product->name !!}</h3>
                                            </div>
                                            <div class="col-12 section-product-middle d-flex py-2 align-items-center">
                                                <div
                                                    class="col-6 section-product-categories d-flex align-items-center">
                                                    <p>{{ $product->category->name }}</p>
                                                </div>
                                                <div class="col-6 section-product-price d-flex justify-content-end">
                                                    <i class="fas fa-shopping-cart fa-fw"></i>
                                                    <h4 class="product_qty_purchared">{{ $product->purchased }}</h4>
                                                </div>
                                                <div class="line-separation"></div>
                                            </div>
                                            <div class="col-12">
                                                <h4 class="product_price d-flex justify-content-center">
                                                    {{ formatPrice($product->price) }}
                                                </h4>
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
                                    class="far fa-angle-double-down updownanimated"></i>
                            </div>
                            <div class="col-12 section-product-action-name">Hiện Thêm</div>
                        </div>
                        <div id="showLess">
                            <div class="col-12 d-flex justify-content-center mb-2"><i
                                    class="far fa-angle-double-up updownanimated"></i>
                            </div>
                            <div class="col-12 section-product-action-name">Ẩn Bớt</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
            tabindex="0">
            <div class="col-12 section-product-items">
                <section class="section-product">
                    <div class="col-12 section-product-items">
                        <div class="section-product-items row">
                            @php
                                $products = \App\Models\Product::where('status', 1)
                                    // ->where('slug_type', 'tai-khoan')
                                    ->with('category')
                                    ->orderBy('purchased', 'desc')
                                    ->limit(30)
                                    ->get(['image', 'slug', 'name', 'price', 'category_id']);
                            @endphp
                            @foreach ($products as $product)
                                <div class="section-product-item col-xl-3 col-sm-6 col-md-4 col-6">
                                    <a href="{{ route('products.show', $product->slug) }}"
                                        class="section-product-anchor">
                                        <div class="col-12 d-xl-flex border shadow-lg">
                                            <div class="col-xl-6 section-product-left">
                                                <img style="height: 165px; max-height:165px;" loading="lazy"
                                                    class="section-product-img" src="{{ asset($product->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="col-xl-6 section-product-right p-2">
                                                <div class="col-12 section-product-name">
                                                    <h3 class="product_name">{!! $product->name !!}</h3>
                                                </div>
                                                <div
                                                    class="col-12 section-product-middle d-flex py-2 align-items-center">
                                                    <div
                                                        class="col-6 section-product-categories d-flex align-items-center">
                                                        <p>{{ $product->category->name }}</p>
                                                    </div>
                                                    <div
                                                        class="col-6 section-product-price d-flex justify-content-end">
                                                        <i class="fas fa-shopping-cart fa-fw"></i>
                                                        <h4 class="product_qty_purchared">{{ $product->purchased }}
                                                        </h4>
                                                    </div>
                                                    <div class="line-separation"></div>
                                                </div>
                                                <div class="col-12">
                                                    <h4 class="product_price d-flex justify-content-center">
                                                        {{ formatPrice($product->price) }}
                                                    </h4>
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
                                        class="far fa-angle-double-down updownanimated"></i>
                                </div>
                                <div class="col-12 section-product-action-name">Hiện Thêm</div>
                            </div>
                            <div id="showLess">
                                <div class="col-12 d-flex justify-content-center mb-2"><i
                                        class="far fa-angle-double-up updownanimated"></i>
                                </div>
                                <div class="col-12 section-product-action-name">Ẩn Bớt</div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab"
            tabindex="0">
            <section class="section-product">
                <div class="col-12 section-product-items">
                    <div class="section-product-items row">
                        @php
                            $products = \App\Models\Product::where('status', 1)
                                // ->where('slug_type', 'tai-khoan')
                                ->with('category')
                                ->orderBy('purchased', 'desc')
                                ->limit(30)
                                ->get(['image', 'slug', 'name', 'price', 'category_id']);
                        @endphp
                        @foreach ($products as $product)
                            <div class="section-product-item col-xl-3 col-sm-6 col-md-4 col-6">
                                <a href="{{ route('products.show', $product->slug) }}"
                                    class="section-product-anchor">
                                    <div class="col-12 d-xl-flex border shadow-lg">
                                        <div class="col-xl-6 section-product-left">
                                            <img style="height: 165px; max-height:165px;" loading="lazy"
                                                class="section-product-img" src="{{ asset($product->image) }}"
                                                alt="">
                                        </div>
                                        <div class="col-xl-6 section-product-right p-2">
                                            <div class="col-12 section-product-name">
                                                <h3 class="product_name">{!! $product->name !!}</h3>
                                            </div>
                                            <div class="col-12 section-product-middle d-flex py-2 align-items-center">
                                                <div
                                                    class="col-6 section-product-categories d-flex align-items-center">
                                                    <p>{{ $product->category->name }}</p>
                                                </div>
                                                <div class="col-6 section-product-price d-flex justify-content-end">
                                                    <i class="fas fa-shopping-cart fa-fw"></i>
                                                    <h4 class="product_qty_purchared">{{ $product->purchased }}</h4>
                                                </div>
                                                <div class="line-separation"></div>
                                            </div>
                                            <div class="col-12">
                                                <h4 class="product_price d-flex justify-content-center">
                                                    {{ formatPrice($product->price) }}
                                                </h4>
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
                                    class="far fa-angle-double-down updownanimated"></i>
                            </div>
                            <div class="col-12 section-product-action-name">Hiện Thêm</div>
                        </div>
                        <div id="showLess">
                            <div class="col-12 d-flex justify-content-center mb-2"><i
                                    class="far fa-angle-double-up updownanimated"></i>
                            </div>
                            <div class="col-12 section-product-action-name">Ẩn Bớt</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</section>
