@extends('home')
@section('hero')

    <section id="home">
        <div class="container">
            <div class="row mt-5 justify-content-center align-items-center">
                <div class="col-7">
                    <h3>Experience the luxurios teste of</h3>
                    <h1 class="display-4 title-hero ">🙌 Caffe Latte!🙌 </h1>
                    <p class="lead">Nikmati hari santaimu dengan tenaang dan fokus!</p>
                    <a class="btn  btn-primary btn-lg " href="#" role="button">Beli sekarang ! </a>
                </div>
                <div class="col-5 img-hero ">
                    <img src="{{ asset('img/kopi.jpg') }}" alt="Image brand"
                        class="w-100 img-fluid img-thumbnail shadow image-brand ">
                </div>
            </div>
        </div>
    </section>
@endsection
@section('product')
<div class="container bg-primary mb-5 rounded" id="list-product">
    <div class="row justify-content-center my-5">
        <h1 class="font-weight-bold text-center text-light mb-4  mt-5">PRODUCT</h1>
        @foreach ($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card ">
                <img src="{{ $product['image'] }}" class="card-img-top image-product" alt="...">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">{{ $product['menu'] }}</h5>
                        <p class="card-text bg-success p-1 rounded text-white">Rp. {{ $product['Price'] }}</p>
                    </div>

                    <p class="mt-4">{{ $product['description'] }}</p>
                    <a href="#" class="btn btn-primary">Pesan sekarang</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
