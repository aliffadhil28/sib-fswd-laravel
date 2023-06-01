@extends('layout.master')

@section('title', 'Loak Station')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection
@section('content')
    <header class="bg-gradient text-white px-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="h-50 d-inline-block w-100 rounded-5"
                        src="https://images.unsplash.com/photo-1598514982901-ae62764ae75e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                        alt="first_image">

                </div>
                <div class="carousel-item active">
                    <img class="h-50 d-inline-block w-100 rounded-5"
                        src="https://images.unsplash.com/photo-1598514982205-f36b96d1e8d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                        alt="first_image">

                </div>
                <div class="carousel-item">
                    <img class="h-50 d-inline-block w-100 rounded-5"
                        src="https://images.unsplash.com/photo-1598511756348-640384c52ada?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                        alt="first_image">

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <!-- About section-->
    <section id="product">
        <div class="container px-4">
            <div class="row row-cols-2 row-cols-md-4">
                @foreach ($products as $produk)
                    <div class="col">
                        <div class="card mb-4">
                            <img src="{{ asset('storage/products/' . $produk->img) }}" class="card-img-top w-auto h-50"
                                alt="...">
                            <div class="card-body">
                                <h2 class="card-title text-truncate">{{ $produk->name }}</h2>
                                <h6 class="card-subtitle my-1">{{ $produk->categories_name }}</h6>
                                <p>Rp. {{ $produk->price }}</p>
                                <p class="card-text text-truncate">{{ $produk->description }}</p>
                                <div class="d-flex justify-content-between">
                                    <a href="/detail/{{ $produk->id }}" class="btn btn-primary">See More</a>
                                    <p class="align-items-center">Amount : {{ $produk->qty }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Services section-->
    <section class="bg-light" id="services">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Services we offer</h2>
                    <p class="lead">Belanja lebih aman dan nyaman, belanja yang menyenangkan</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section-->
    <section id="contact">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Contact us</h2>
                    <p class="lead">
                    <ul>
                        <li>Whatsapp : +6281240081512</li>
                        <li>Email : arkatama.store@gmail.com</li>
                        <li>Address : Perumahan Joyoagung Greenland No. B4-B5 Tlogomas, Malang
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
