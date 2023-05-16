@extends('layouts.navcategories')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <div class="main-container" id="test">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            @foreach ($categories as $category)
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $loop->index == 0 ? 'active' : '' }}" id="category-{{ $category->id }}-tab"
                        data-bs-toggle="tab" data-bs-target="#category-{{ $category->id }}-tab-pane" type="button"
                        role="tab" aria-controls="category-{{ $category->id }}-tab-pane"
                        aria-selected="{{ $i = 0 ? 'true' : 'false' }}">{{ $category->name }}</button>
                </li>
            @endforeach
        </ul>
        <div class="tab-content" id="myTabContent">
            @foreach ($categories as $category)
                <div class="tab-pane fade {{ $loop->index == 0 ? 'show active' : '' }}"
                    id="category-{{ $category->id }}-tab-pane" role="tabpanel"
                    aria-labelledby="category-{{ $category->id }}-tab" tabindex="0">
                    <div class="products-container">

                        @if (count($category->products))
                            @foreach ($category->products as $product)
                                <div class="card" id="card">
                                    <img style="height:45%; padding: 40px 60px;"
                                        src="{{ $product->images['links'][0] ?? '' }}" class="card-img-top"
                                        alt=""post"">
                                    <div class="card-body">
                                        <div class="text-wrapper" style="height:200px; overflow:hidden;">
                                            <h5 class="card-title">{{ $product->name }}</h5>
                                            <span>
                                                <i class="fas fa-coins"></i>{{ $product->price }}
                                            </span>
                                            <p class="card-text">{{ $product->description }}</p>
                                        </div>

                                        <div class="d-flex justify-content-between" id="container">
                                            <a href="#" onclick="addProductToCart({{ $product->id }})"
                                                class="btn btn-primary">Add To Cart</a>
                                            <a href="#" class="unfilled-heart" id="unfilled-heart"
                                                onclick="addProductToWish({{ $product->id }})">
                                                <i class="fa-solid fa-heart fa-2xl"
                                                    style="position: relative; z-index:2000"></i></a>
                                            <i class="fa-solid fa-heart fa-2xl" class="filled-heart"
                                                style="position:absolute; right:16px; color:red; z-index:1"
                                                id="unfilled-heart"></i>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        @else
                            <p>This category doesn't have any products yet!</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {

        document.querySelectorAll('.unfilled-heart').forEach(function(el) {
            el.addEventListener("click", function() {
                el.style.display = "none";

            })
        })

    })




    function addProductToCart(productID) {
        axios.post(`/cart/products/${productID}`)
            .then(function(response) {
                // handle success
                console.log(response);
            })
            .catch(function(error) {
                // handle error
                console.log(error);
            });
    }


    function removeProductFromCart(productID) {
        axios.delete(`/cart/products/${productID}`)
            .then(function(response) {
                // handle success
                console.log(response);
            })
            .catch(function(error) {
                // handle error
                console.log(error);
            });
    }

    function getCart() {
        axios.get(`/cart`)
            .then(function(response) {
                // handle success
                console.log(response);
            })
            .catch(function(error) {
                // handle error
                console.log(error);
            });
    }

    function addProductToWish(productID) {
        axios.post(`/wishlist/products/${productID}`)
            .then(function(response) {
                // handle success
                console.log(response);
            })
            .catch(function(error) {
                // handle error
                console.log(error);
            });
    }

    function getWish() {
        axios.get(`/wish`)
            .then(function(response) {
                // handle success
                console.log(response);
            })
            .catch(function(error) {
                // handle error
                console.log(error);
            });
    }
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    img {
        width: 100%
    }

    body {
        font-family: 'Poppins', sans-serif;
        line-height: 1.5;
    }




    @media(max-width: 1170px) {
        .posts-main-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(max-width: 768px) {
        .posts-main-container {
            grid-template-columns: 1fr;
        }
    }



    .products-container {
        display: flex;
        margin: 10px 30px;

    }

    .card {
        width: 23%;
        margin: 20px 5px;
        height: 500px !important;
        box-shadow: 2px 2px 2px #c2c7cb;

    }

    img {
        height: 60%
    }

    .tab-pane {
        display: flex;
    }
</style>
