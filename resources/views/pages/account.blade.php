@extends('layouts.navaccount')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    </a>
    </div>
    <br />


    <div class="container padding-bottom-3x mb-2">
        <div class="row">
            <div class=" col-sm-6 col-lg-12">
                <aside class="user-info-wrapper">
                    <div class="user-cover" style="background-image: url(https://bootdey.com/img/Content/bg1.jpg);">

                    </div>
                    <div class="user-info">
                        <div class="user-avatar">
                            <p class="edit-avatar">
                                <i class="fa fa-edit"style="margin-left: 4px;margin-top: 8px;font-size: 1.4rem;"></i>
                                <input type="file" id="fileInput" style="opacity: 0">
                            </p>

                            <img id="profilePic" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User">
                        </div>
                        <div class="user-data">

                            <h5 class="card-title">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
                            <span>{{ Auth::user()->email }} </span>
                        </div>
                    </div>
                </aside>
                <nav class="list-group">
                    <a class="list-group-item" href="account"><i class="fa fa-user"></i>Profile</a>
                    <a class="list-group-item with-badge" href="cart"><i class=" fa fa-th"></i>Orders<span
                            class="badge badge-primary badge-pill"></span></a>
                    <a class="list-group-item with-badge" href="wishlist"><i class="fa fa-heart"></i>Wishlist<span
                            class="badge badge-primary badge-pill"></span></a>

                </nav>
            </div>
        </div>
    </div>
    <script>
        const file = document.querySelector('#fileInput');
        const profilePic = document.querySelector('#profilePic')
        file.addEventListener("change", function() {
            const choosedFile = this.files[0];
            if (choosedFile) {
                const reader = new FileReader();
                reader.addEventListener('load', function() {
                    profilePic.setAttribute('src', reader.result)
                })
                reader.readAsDataURL(choosedFile)
            }
        });


    </script>
@endsection


<style>
    body {
        margin: 0px;
        margin-bottom: 20px;
    }

    .user-info-wrapper {
        position: relative;
        width: 100%;
        margin-bottom: -1px;
        padding-top: 90px;
        padding-bottom: 30px;
        border: 1px solid #e1e7ec;
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
        overflow: hidden
    }

    .user-info-wrapper .user-cover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 120px;
        background-position: center;
        background-color: #f5f5f5;
        background-repeat: no-repeat;
        background-size: cover
    }

    .user-info-wrapper .user-cover .tooltip .tooltip-inner {
        width: 230px;
        max-width: 100%;
        padding: 10px 15px
    }

    .user-info-wrapper .info-label {
        display: block;
        position: absolute;
        top: 18px;
        right: 18px;
        height: 26px;
        padding: 0 12px;
        border-radius: 13px;
        background-color: #fff;
        color: #606975;
        font-size: 12px;
        line-height: 26px;
        box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.18);
        cursor: pointer
    }

    .user-info-wrapper .info-label>i {
        display: inline-block;
        margin-right: 3px;
        font-size: 1.2em;
        vertical-align: middle
    }

    .user-info-wrapper .user-info {
        display: table;
        position: relative;
        width: 100%;
        padding: 0 18px;
        z-index: 5
    }

    .user-info-wrapper .user-info .user-avatar,
    .user-info-wrapper .user-info .user-data {
        display: table-cell;
        vertical-align: top
    }

    .user-info-wrapper .user-info .user-avatar {
        position: relative;
        width: 115px
    }

    .user-info-wrapper .user-info .user-avatar>img {
        display: block;
        width: 100%;
        border: 5px solid #fff;
        border-radius: 50%
    }

    .user-info-wrapper .user-info .user-avatar .edit-avatar {
        display: block;
        position: absolute;
        top: -2px;
        right: 2px;
        width: 36px;
        height: 36px;
        transition: opacity .3s;
        border-radius: 50%;
        background-color: #fff;
        color: #606975;
        line-height: 34px;
        box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        cursor: pointer;
        opacity: 0;
        text-align: center;
        text-decoration: none
    }

    .user-info-wrapper .user-info .user-avatar .edit-avatar::backdrop {
        font-family: feather;
        font-size: 17px;
        opacity: 0;
        content: '\e058'
    }

    .file::backdrop {
        opacity: 0;
    }

    .user-info-wrapper .user-info .user-avatar:hover .edit-avatar {
        opacity: 1
    }

    .user-info-wrapper .user-info .user-data {
        padding-top: 48px;
        padding-left: 12px
    }

    .user-info-wrapper .user-info .user-data h4 {
        margin-bottom: 2px
    }

    .user-info-wrapper .user-info .user-data span {
        display: block;
        color: #9da9b9;
        font-size: 13px
    }

    .user-info-wrapper+.list-group .list-group-item:first-child {
        border-radius: 0
    }

    .user-info-wrapper+.list-group .list-group-item:first-child {
        border-radius: 0;
    }

    .list-group-item:first-child {
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
    }

    .list-group-item:first-child {
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
    }

    a.list-group-item {
        padding-top: .87rem;
        padding-bottom: .87rem;
    }

    a.list-group-item,
    .list-group-item-action {
        transition: all .25s;
        color: #606975;
        font-weight: 500;
    }

    .with-badge {
        position: relative;
        padding-right: 3.3rem;
    }

    .list-group-item {
        border-color: #e1e7ec;
        background-color: #fff;
        text-decoration: none;
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: .75rem 1.25rem;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.125);
    }

    .shopping-cart,
    .wishlist-table,
    .order-table {
        margin-bottom: 20px
    }

    .shopping-cart .table,
    .wishlist-table .table,
    .order-table .table {
        margin-bottom: 0
    }

    .shopping-cart .btn,
    .wishlist-table .btn,
    .order-table .btn {
        margin: 0
    }

    .shopping-cart>table>thead>tr>th,
    .shopping-cart>table>thead>tr>td,
    .shopping-cart>table>tbody>tr>th,
    .shopping-cart>table>tbody>tr>td,
    .wishlist-table>table>thead>tr>th,
    .wishlist-table>table>thead>tr>td,
    .wishlist-table>table>tbody>tr>th,
    .wishlist-table>table>tbody>tr>td,
    .order-table>table>thead>tr>th,
    .order-table>table>thead>tr>td,
    .order-table>table>tbody>tr>th,
    .order-table>table>tbody>tr>td {
        vertical-align: middle !important
    }

    .shopping-cart>table thead th,
    .wishlist-table>table thead th,
    .order-table>table thead th {
        padding-top: 17px;
        padding-bottom: 17px;
        border-width: 1px
    }

    .shopping-cart .remove-from-cart,
    .wishlist-table .remove-from-cart,
    .order-table .remove-from-cart {
        display: inline-block;
        color: #ff5252;
        font-size: 18px;
        line-height: 1;
        text-decoration: none
    }

    .shopping-cart .count-input,
    .wishlist-table .count-input,
    .order-table .count-input {
        display: inline-block;
        width: 100%;
        width: 86px
    }

    .shopping-cart .product-item,
    .wishlist-table .product-item,
    .order-table .product-item {
        display: table;
        width: 100%;
        min-width: 150px;
        margin-top: 5px;
        margin-bottom: 3px
    }

    .shopping-cart .product-item .product-thumb,
    .shopping-cart .product-item .product-info,
    .wishlist-table .product-item .product-thumb,
    .wishlist-table .product-item .product-info,
    .order-table .product-item .product-thumb,
    .order-table .product-item .product-info {
        display: table-cell;
        vertical-align: top
    }

    .shopping-cart .product-item .product-thumb,
    .wishlist-table .product-item .product-thumb,
    .order-table .product-item .product-thumb {
        width: 130px;
        padding-right: 20px
    }

    .shopping-cart .product-item .product-thumb>img,
    .wishlist-table .product-item .product-thumb>img,
    .order-table .product-item .product-thumb>img {
        display: block;
        width: 100%
    }

    @media screen and (width: 150%; ) {

        .shopping-cart .product-item .product-thumb,
        .wishlist-table .product-item .product-thumb,
        .order-table .product-item .product-thumb {
            display: none
        }
    }

    .shopping-cart .product-item .product-info span,
    .wishlist-table .product-item .product-info span,
    .order-table .product-item .product-info span {
        display: block;
        font-size: 13px
    }

    .shopping-cart .product-item .product-info span>em,
    .wishlist-table .product-item .product-info span>em,
    .order-table .product-item .product-info span>em {
        font-weight: 500;
        font-style: normal
    }

    .shopping-cart .product-item .product-title,
    .wishlist-table .product-item .product-title,
    .order-table .product-item .product-title {
        margin-bottom: 6px;
        padding-top: 5px;
        font-size: 16px;
        font-weight: 500
    }

    .shopping-cart .product-item .product-title>a,
    .wishlist-table .product-item .product-title>a,
    .order-table .product-item .product-title>a {
        transition: color .3s;
        color: #374250;
        line-height: 1.5;
        text-decoration: none
    }

    .shopping-cart .product-item .product-title>a:hover,
    .wishlist-table .product-item .product-title>a:hover,
    .order-table .product-item .product-title>a:hover {
        color: #0d5cef
    }

    .shopping-cart .product-item .product-title small,
    .wishlist-table .product-item .product-title small,
    .order-table .product-item .product-title small {
        display: inline;
        margin-left: 6px;
        font-weight: 500
    }

    .wishlist-table .product-item .product-thumb {
        display: table-cell !important
    }

    @media screen and (max-width: 576px) {
        .wishlist-table .product-item .product-thumb {
            display: none !important
        }
    }

    .badge.badge-primary {
        background-color: #0da9ef;
    }

    .with-badge .badge {
        position: absolute;
        top: 50%;
        right: 1.15rem;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .list-group-item i {
        margin-top: -4px;
        margin-right: 8px;
        font-size: 1.1em;
    }

    .fa-edit {
        position: relative;
        align-items: center;
        margin-top: 55;
        z-index: 100;
    }

    input {
        position: absolute;
        width: 87px;
        left: -6px;
        top: 8px;
        background: black;
        z-index: 1000;
        opacity: 0;
    }

    /* Dropdown Button */
    .dropbtn {
        background-color: #444847;
        color: white;
        padding: 16px;
        font-size: 16px;
        border-radius: 20%;
        margin-left: 10px;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        overflow: auto;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;

    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>
