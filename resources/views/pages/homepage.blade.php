@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <div class="container">


        <div class="row">

            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="images/banner1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/banner2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/banner3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

        <div class="row" style="margin-top: 13px;">

            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <h4>laptops|Up to 15% off</h4>
                    <br />
                    <div class="container text-center">
                        <div class="row row-cols-2">
                            <div class="col"><img src="images/lap1.jpg" width="229%">

                            </div>
                        </div>
                        <div class="card-body">
                            <br />

                            <a href="categories" class="card-link">See more laptops</a>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <h4>Cameras|Up to 10% off</h4>
                    <br />
                    <div class="container text-center">
                        <div class="row row-cols-2">
                            <div class="col"><img src="images/cameras.jpg" width="227%">


                            </div>
                        </div>
                        <div class="card-body">

                            <a href="categories" class="card-link">See more cameras</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <h4>Sound Systems</h4>
                    <div class="container text-center">
                        <div class="row row-cols-2">
                            <div class="col"><img src="images/soundsystem2.jpg" width="195%">


                            </div>
                        </div>
                        <div class="card-body">


                            <a href="categories" class="card-link">See more sound systems</a>

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <h4>Gaming consoles</h4>
                    <div class="container text-center">
                        <div class="row row-cols-2">
                            <div class="col"><img src="{{ URL::asset('/images/gamingconsole2.jpg') }}" width="159%">
                            </div>
                        </div>
                        <div class="card-body">

                            <a href="categories" class="card-link">See more gaming consoles</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class=" col-sm-6 col-lg-3">
                    <h4>corporate information</h4>
                    <ul>
                        <li><a href="homepage">RENT IT</a></li>
                        <li><a href="aboutus">About us</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="account">My account page</a></li>
                        <li><a href="contactus">contact us</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="categories">categories page</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h4>social links</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!--end of container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
@endsection

<style>
    .filter {

        padding-top: 30px;
    }

    .footer {
        background-color: white;
        padding: 70px;
    }

    .card h4 {
        margin-top: 50px;
        height: 100%;

    }

    .container {
        text-align: center;

    }

    .footer {
        background-color: black;
        padding: 70px;
        margin-top: 200px;
    }

    .footer h4 {
        color: white;
        margin-bottom: 40px;
    }

    .footer ul {
        list-style: none;
        padding-left: 0;
        text-align: center;
    }

    .footer i {
        margin: 0;
    }

    .footer-col {
        width: 25%;
        padding: 15px;
    }

    .pagination {
        justify-content: center;
    }

    .flex-parent {
        display: flex;
    }

    < !--styleoffilter-->.dropbtn {
        background-color: black;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropbtn {
        background-color: black;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: absolute;

        float: left;
        margin-top: -500px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f6f6f6;
        min-width: 50px;
        overflow: auto;
        border: 1px solid #ddd;
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .show {
        display: block;
    }
</style>
