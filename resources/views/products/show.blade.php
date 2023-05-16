@extends('products.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">product Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $product->name }}</h5>
                <p class="card-text">Price : {{ $product->price }}</p>
                <p class="card-text">Images : {{ $product->images['links'][0] ?? '' }}</p>
                <p class="card-text">Category-id : {{ $product->category_id }}</p>
                <p class="card-text">description : {{ $product->description }}</p>
            </div>

        </div>
    </div>
