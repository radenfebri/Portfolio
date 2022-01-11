@extends('layouts-user.layouts', ['menu' => 'store', 'submenu' => ''])

@section('title' , $product->name )

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="/">Home</a></li>
                <li>{{ $categorieproduct->name }}</li>
                <li>@yield('title')</li>
            </ol>
            <h2>@yield('title') Page</h2>

        </div>
    </section>
    <!-- End Breadcrumbs -->


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details product_data">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('storage/'. $product->image) }}"  style="width: 80%; height: 80%;" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Product Information</h3>
                        <p><a type="button" class="btn btn-danger">{{ $product->trending == '1' ? 'Trending':'' }}</a></p>
                        <ul>
                            <li><strong>Category</strong>: {{ $categorieproduct->name }}</li>
                            <li><strong>Harga Asli</strong>: <s>Rp.{{ number_format($product->original_price) }}</s></li>
                            <li><strong>Harga Promo</strong>: Rp.{{ number_format($product->selling_price) }}</li>
                            {{-- <span class="float-start"></span>
                            <span class="float-end"></span> --}}
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>{{ $product->name }}</h2>
                        <p>
                            {{ $product->description }}.
                        </p>

                        @if ($product->qty > 0)
                        <label class="btn-success btn-sm">In stock</label>
                        @else
                        <label class="btn-danger btn-sm">Out of stock</label>
                        @endif
                        <br>
                        <hr>

                        <div class="row mt-2">
                            <div class="col-md-4">
                                <input type="hidden" value="{{ $product->id }}" class="prod_id" id="">
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3">
                                    <span class="input-group-btn">
                                        <button type="button" class="input-group-text btn btn-danger decrement-btn">
                                            <span class="glyphicon glyphicon-minus">-</span>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control qty-input text-center input-number" value="1">
                                    <span class="input-group-btn">
                                        <button type="button" class="input-group-text btn btn-success increment-btn" >
                                            <span class="glyphicon glyphicon-plus">+</span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <br>
                                <button type="button" class="btn btn-primary me-3 addToCartBtn float-start">Add to Cart <i class="fas fa-cart-plus"></i></button>
                                <button type="button" class="btn btn-success me-3 float-start">Add to Wishlist <i class="fas fa-heart"></i></button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->


</main>
<!-- End #main -->

@endsection




