@extends('layouts.navwish')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <div class="container mt-5">
        <div class="row">
            @if ($wishlist && $wishlist->hasProducts())
                @foreach ($wishlist->getProducts() as $productID => $productInfo)
                    <div key={index} class="row d-flex align-items-center mb-5">
                        <div class="col-lg-2 " style="height: 121px;">
                            <img style="height: 121px;" src="{{ $productInfo->getProduct()->images['links'][0] ?? '' }}"
                                class="card-img-top" alt="post">
                        </div>

                        <div class="col-lg-4">
                            <h4>{{ $productInfo->getProduct()->name }}</h4>
                        </div>



                        <div class="col-lg-2">
                            <h4> Price: ${{ $productInfo->getTotalPrice() }}</h4>
                        </div>



                        <div class="col-lg-2">
                            <button id='delete' class="btn deleteItem bg-danger text-white border-0"
                                onClick="removeProductFromWish({{ $productID }})">Remove</button>
                        </div>

                        <div class="d-flex col-lg-2">
                            <div>
                                <a href="#" onclick="addProductToCart({{ $productID }})"
                                    class="btn btn-primary">MoveTo
                                    Cart</a>
                            </div>
                        </div>
                        <hr class='my-3' />


                    </div>
                @endforeach
            @else
                <div class="empty-cart">
                    <p>there are no products in your wishlist yet :(</p>

                    <div class="img-wrapper">
                        <img src="images/empty-cart.png" />

                    </div>

                    <a href="categories">
                        <button type="submit" class="read-btn"> Go Shopping</button>
                    </a>
                </div>
            @endif
        </div>

    </div>
@endsection

<script>
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

    function removeProductFromWish(productID) {
        axios.delete(`/wishlist/products/${productID}`)
            .then(function(response) {
                // handle success
                console.log(response);
            })
            .catch(function(error) {
                // handle error
                console.log(error);
            });
    }

    function placeOrder() {
        axios.post('orders')
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

        {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    img {
        width: 100%
    }

    .productsContainer {
        display: flex;

    }

    .empty-cart {
        margin: 10px 450px;
    }

    .empty-cart p {
        font-weight: 600;
        font-size: 20px;
        color: purple;
    }

    .img-wrapper {
        width: 400px;
    }

    body {
        font-family: 'Poppins', sans-serif;
        line-height: 1.5;
    }

    /****************/
    .main-container {
        width: 93vw;
        margin: 0 auto;
        padding: 40px 0;
    }

    .main-container>h2 {
        text-align: center;
        padding: 10px 0;
        font-size: 32px;
    }

    .main-container>p {
        font-weight: 300;
        padding: 10px 0;
        opacity: 0.7;
        text-align: center;
    }

    .category-head {
        margin: 30px 0;
    }

    .category-head ul {
        list-style-type: none;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

    .category-title {
        flex: 0 0 calc(16.6667% - 10px);
        display: flex;
        justify-content: center;
        background: #a8a8a8;
        padding: 12px;
        color: #fff;
        margin: 5px;
        cursor: pointer;
        transition: all 0.4s ease;
    }

    .category-title:hover {
        opacity: 0.7;
    }

    .category-title li {
        padding: 0 10px;
    }

    .category-title span {
        color: #222;
    }

    /** single post **/
    .posts-main-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 40px;
    }

    .posts-main-container>div {
        box-shadow: 0px 8px 22px -12px rgba(0, 0, 0, 0.64);
    }

    .post-img {
        position: relative;
        width: 100%;
        height: 400px;
    }

    .category-name {
        position: absolute;
        top: 20px;
        left: 20px;
        text-transform: uppercase;
        font-size: 15px;
        color: #fff;
        padding: 4px 10px;
        border-radius: 2px;
    }

    .sound-systems .category-name {
        background: #00a7ea;
    }

    .laptops .category-name {
        background: #f03250;
    }

    .cameras .category-name {
        background: #f0544f;
    }

    .gaming-consoles .category-name {
        background: #2c2a4a;
    }

    .projectors .category-name {
        background: #a1e44d;
    }


    .post-content {
        padding: 25px;
    }

    .post-content-top {
        background: #80ced7;
        color: #fff;
        opacity: 0.8;
        padding: 5px 0 5px 15px;
    }

    .post-content-top span {
        padding-right: 20px;
    }

    .post-content-top .fa-comment,
    .post-content-top .fa-calendar {
        padding-right: 5px;
    }

    .post-content h2 {
        font-size: 22px;
        padding: 12px 0;
        font-weight: 400;
    }

    .post-content p {
        opacity: 0.7;
        font-size: 15px;
        line-height: 1.8;
    }

    .read-btn {
        border: none;
        padding: 8px 15px;
        display: block;
        margin: 5px auto;
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        cursor: pointer;
        border: 1px solid #292929;
        background: transparent;
        margin-bottom: 40px;
    }

    .read-btn:hover {
        background: #f6f6f6;
    }



    /***************/
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

    i {
        color: #868081;
        margin-left: 15px;
        margin-top: 20px;

    }

    .fa-coins {
        color: yellow;
    }

    /***********/

    .active {
        background: #f0544f;
    }

    .d-flex {
        align-items: center;
        justify-content: space-between;
    }
</style>
