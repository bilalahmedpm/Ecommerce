@extends('front.layouts.master')
@section('content')
    <!-- ============================================================= Header End ============================================================= -->
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('front.index')}}">Home</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span><a href="#">{{$product->category->name}}</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>{{$product->title}}
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="product product-type-simple">
                            <div class="single-product-wrapper">
                                <div class="product-images-wrapper thumb-count-4">
                                            <span class="onsale">-
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">${{ $product->price}}</span></span>
                                            </span>
                                    <!-- .onsale -->
                                    <div id="techmarket-single-product-gallery" class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images" data-columns="4">
                                        <div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel" data-wrap=".woocommerce-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                            <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                                <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                                <figure class="woocommerce-product-gallery__wrapper ">
                                                    <div data-thumb="{{asset($product->img2)}}" class="woocommerce-product-gallery__image">
                                                        <a href="{{asset($product->img1)}}" tabindex="0">
                                                            <img width="600" height="600" src="{{asset($product->img1)}}" class="attachment-shop_single size-shop_single wp-post-image" alt="">
                                                        </a>
                                                    </div>
                                                    <div data-thumb="{{asset($product->img3)}}" class="woocommerce-product-gallery__image">
                                                        <a href="{{asset($product->img2)}}" tabindex="-1">
                                                            <img width="600" height="600" src="{{asset($product->img2)}}" class="attachment-shop_single size-shop_single" alt="">
                                                        </a>
                                                    </div>
                                                    <div data-thumb="{{asset($product->img1)}}" class="woocommerce-product-gallery__image">
                                                        <a href="{{asset($product->img3)}}" tabindex="-1">
                                                            <img width="600" height="600" src="{{asset($product->img3)}}" class="attachment-shop_single size-shop_single" alt="">
                                                        </a>
                                                    </div>


                                                </figure>
                                            </div>
                                            <!-- .woocommerce-product-gallery -->
                                        </div>
                                        <!-- .techmarket-single-product-gallery-images -->
                                        <div class="techmarket-single-product-gallery-thumbnails" data-ride="tm-slick-carousel" data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:765,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;horizontal&quot;:true,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:4}}]}">
                                            <figure class="techmarket-single-product-gallery-thumbnails__wrapper">
                                                <figure data-thumb="{{asset($product->img1)}}" class="techmarket-wc-product-gallery__image">
                                                    <img width="180" height="180" src="{{asset($product->img1)}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                                </figure>
                                                <figure data-thumb="{{asset($product->img2)}}" class="techmarket-wc-product-gallery__image">
                                                    <img width="180" height="180" src="{{asset($product->img2)}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                </figure>
                                                <figure data-thumb="{{asset($product->img3)}}" class="techmarket-wc-product-gallery__image">
                                                    <img width="180" height="180" src="{{asset($product->img3)}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                </figure>

                                                <figure data-thumb="{{asset($product->img2)}}" class="techmarket-wc-product-gallery__image">
                                                    <img width="180" height="180" src="{{asset($product->img2)}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                </figure>
                                            </figure>
                                            <!-- .techmarket-single-product-gallery-thumbnails__wrapper -->
                                        </div>
                                        <!-- .techmarket-single-product-gallery-thumbnails -->
                                    </div>
                                    <!-- .techmarket-single-product-gallery -->
                                </div>
                                <!-- .product-images-wrapper -->
                                <div class="summary entry-summary">
                                    <div class="single-product-header">
                                        <h1 class="product_title entry-title">{{$product->title}}</h1>
                                        <a class="add-to-wishlist" href="#">Add to Cart</a>
                                    </div>
                                    <!-- .single-product-header -->
                                    <div class="single-product-meta">
                                        <div class="brand">
                                            <a href="#">
                                                <svg data-name="Layer 1" style="width: 160px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 28">
                                                    <defs>
                                                        <style>
                                                            .cls-1,
                                                            .cls-2 {
                                                                fill: #333e48;
                                                            }

                                                            .cls-1 {
                                                                fill-rule: evenodd;
                                                            }

                                                            .cls-3 {
                                                                fill: #3265b0;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <polygon class="cls-1" points="171.63 0.91 171.63 11 170.63 11 170.63 0.91 170.63 0.84 170.63 0.06 176 0.06 176 0.91 171.63 0.91"></polygon>
                                                    <rect class="cls-2" x="166.19" y="0.06" width="3.47" height="0.84"></rect>
                                                    <rect class="cls-2" x="159.65" y="4.81" width="3.51" height="0.84"></rect>
                                                    <polygon class="cls-1" points="158.29 11 157.4 11 157.4 0.06 158.26 0.06 158.36 0.06 164.89 0.06 164.89 0.87 158.36 0.87 158.36 10.19 164.99 10.19 164.99 11 158.36 11 158.29 11"></polygon>
                                                    <polygon class="cls-1" points="149.54 6.61 150.25 5.95 155.72 10.98 154.34 10.98 149.54 6.61"></polygon>
                                                    <polygon class="cls-1" points="147.62 10.98 146.65 10.98 146.65 0.05 147.62 0.05 147.62 5.77 153.6 0.33 154.91 0.33 147.62 7.05 147.62 10.98"></polygon>
                                                    <path class="cls-1" d="M156.39,24h-1.25s-0.49-.39-0.71-0.59l-1.35-1.25c-0.25-.23-0.68-0.66-0.68-0.66s0-.46,0-0.72a3.56,3.56,0,0,0,3.54-2.87,3.36,3.36,0,0,0-3.22-4H148.8V24h-1V13.06h5c2.34,0.28,4,1.72,4.12,4a4.26,4.26,0,0,1-3.38,4.34C154.48,22.24,156.39,24,156.39,24Z" transform="translate(-12 -13)"></path>
                                                    <polygon class="cls-1" points="132.04 2.09 127.09 7.88 130.78 7.88 130.78 8.69 126.4 8.69 124.42 11 123.29 11 132.65 0 133.04 0 133.04 11 132.04 11 132.04 2.09"></polygon>
                                                    <polygon class="cls-1" points="120.97 2.04 116.98 6.15 116.98 6.19 116.97 6.17 116.95 6.19 116.95 6.15 112.97 2.04 112.97 11 112 11 112 0 112.32 0 116.97 4.8 121.62 0 121.94 0 121.94 11 120.97 11 120.97 2.04"></polygon>
                                                    <ellipse class="cls-3" cx="116.3" cy="22.81" rx="5.15" ry="5.18"></ellipse>
                                                    <rect class="cls-2" x="99.13" y="0.44" width="5.87" height="27.12"></rect>
                                                    <polygon class="cls-1" points="85.94 27.56 79.92 27.56 79.92 0.44 85.94 0.44 85.94 16.86 96.35 16.86 96.35 21.84 85.94 21.84 85.94 27.56"></polygon>
                                                    <path class="cls-1" d="M77.74,36.07a9,9,0,0,0,6.41-2.68L88,37c-2.6,2.74-6.71,4-10.89,4A13.94,13.94,0,0,1,62.89,27.15,14.19,14.19,0,0,1,77.11,13c4.38,0,8.28,1.17,10.89,4,0,0-3.89,3.82-3.91,3.8A9,9,0,1,0,77.74,36.07Z" transform="translate(-12 -13)"></path>
                                                    <rect class="cls-2" x="37.4" y="11.14" width="7.63" height="4.98"></rect>
                                                    <polygon class="cls-1" points="32.85 27.56 28.6 27.56 28.6 5.42 28.6 3.96 28.6 0.44 47.95 0.44 47.95 5.42 34.46 5.42 34.46 22.72 48.25 22.72 48.25 27.56 34.46 27.56 32.85 27.56"></polygon>
                                                    <polygon class="cls-1" points="15.4 27.56 9.53 27.56 9.53 5.57 9.53 0.59 9.53 0.44 24.93 0.44 24.93 5.57 15.4 5.57 15.4 27.56"></polygon>
                                                    <rect class="cls-2" y="0.44" width="7.19" height="5.13"></rect>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="cat-and-sku">
                                                    <span class="posted_in categories">
                                                        <a rel="tag" href="#">{{$product->category->name}}</a>
                                                    </span>
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">{{$product->sku}}</span>
                                                    </span>
                                        </div>
                                        <div class="product-label">
                                            <div class="ribbon label green-label">
                                                <span>A+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .single-product-meta -->
                                    <div class="rating-and-sharing-wrapper">
                                        <div class="woocommerce-product-rating">

                                            <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span class="count">1</span> Avis client)</a>
                                        </div>
                                    </div>

                                    <div class="woocommerce-product-details__short-description">
                                        <p>
                                            {{$product->description}}
                                        </p>
                                    </div>
                                    <!-- .woocommerce-product-details__short-description -->
                                    <div class="product-actions-wrapper">
                                        <div class="product-actions">
                                            <p class="price">

                                                <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">{{$product->price}}</span>€</span>
                                                </ins>
                                            </p>
                                            <!-- .single-product-header -->
                                            <form enctype="multipart/form-data" method="post" action="{{route('add.cart')}}" class="cart">
                                                @csrf
                                                <div class="quantity">
                                                    <label for="quantity-input">Quantité</label>
                                                    <input type="hidden" name="id" value="{{$product->id}}">
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" id="quantity-input">
                                                </div>
                                                <!-- .quantity -->
                                                <button class="single_add_to_cart_button button alt"  type="submit">Add to Cart</button>
                                            </form>
                                            <!-- .cart -->

                                        </div>
                                        <!-- .product-actions -->
                                    </div>
                                    <!-- .product-actions-wrapper -->
                                </div>
                                <!-- .entry-summary -->
                            </div>
                            <!-- .single-product-wrapper -->
                            <div class="tm-related-products-carousel section-products-carousel" id="tm-related-products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#tm-related-products-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                <section class="related">
                                    <header class="section-header">
                                        <h2 class="section-title">Produits connexes</h2>
                                        <nav class="custom-slick-nav"></nav>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products">

                                        <!-- /.product-outer -->
                                        @foreach($products as $row)
                                            <div class="product">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <a href="#" rel="nofollow" class="add_to_wishlist"> Add to Cart</a>
                                                </div>
                                                <a href="{{route('product.single',['id'=>$row->id])}}" class="woocommerce-LoopProduct-link">
                                                    <img src="{{asset($row->img1)}}" width="224" height="197" class="wp-post-image" alt="">
                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount">{{$row->price}}€</span>
                                                                                </ins>

                                                                            </span>
                                                    <!-- /.price -->
                                                    <h2 class="woocommerce-loop-product__title">{{$row->title}}</h2>
                                                </a>
                                                <div class="hover-area">
                                                    <a class="button add_to_cart_button" href="#" rel="nofollow">Add to cart</a>
                                                    {{--                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>--}}
                                                </div>
                                            </div>

                                        @endforeach


                                    </div>
                                </section>
                                <!-- .single-product-wrapper -->
                            </div>

                        </div>
                        <!-- .product -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .row -->
        </div>

    </div>


@endsection
