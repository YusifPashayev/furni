@extends('layouts.app')
@section('content')
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="intro-excerpt">
                        <h1>Shop</h1>
                    </div>
                </div>
                <div class="col-lg-12" style="padding: 20px;">
                    <h3 style="color: white;">Categories</h3>
                    <ul class="row" style="padding: 0; margin: 0;">
                        @foreach ($categories as $category)
                            <li class="col-lg-1" style="list-style: none; text-align: center; padding: 10px;">
                                <a style="text-decoration: none; color: white; display: block; padding: 10px; transition: background-color 0.3s;"
                                    href={{ route('shop.category', ['slug' => $category->slug]) }}>{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-12 col-md-4 col-lg-3 mb-5">
                        <a class="product-item" href="#">
                            <img src={{ asset('storage/' . $product->image_url) }} class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $product->name }}</h3>
                            <strong class="product-price">${{ $product->price }}</strong>

                            <span class="icon-cross">
                                <img src="images/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
