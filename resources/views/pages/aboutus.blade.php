@extends('layouts.navabout-contact')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <div class="aboutUs">
        <div class="container">
            <div class="row">
                <div class="flex">
                    <h2>About us</h2>
                    <h3>Our Goal</h3>
                    <p>Websites are a key element to every business in today’s market. It is a company’s domain where they
                        provide information to people who surf the web looking for a product or service. In order to entice
                        users to the site and have them return to it you must be extremely creative and update the site
                        continuously. So we design our website to communicate with users by providing useful information and
                        creating awareness on products and services.</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/"><i class="fa-brands icon fa-facebook"></i></a>
                        <a href="https://www.instagram.com/"><i class="fa-brands icon fa-instagram"></i></a>

                    </div>
                    <a href="homepage" class="btn">Learn more</a>
                </div>

                <div class="members">
                    <h1>Team Members:</h1>
                    <h6>Esraa Ahmed Mohamed Youssef ==> 34236</h6>
                    <h6>Salma Ayman abdelfatah elmarhoumi ==> 34275</h6>
                    <h6>Ziad Saeed Mohamed Ibrahim ==> 34239 </h6>
                    <h6>Abdelrhman Hussin Shaaban Mady ==> 73167 </h6>
                    <h6>Mahmoud Ahmed Mohamed Ahmed ==> 73116</h6>
                    <h6>Adham Ahmed Galal Elsayed ==> 34246</h6>
                    <h6>Ahmed Elsayed Mohamed Ahmed Elserity ==> 34251</h6>
                    <h6>Rowan Fayez Hegazy Elsayed ==> 34269</h6>
                    <h6>Fares Mohamed Mohamed Abdelaziz ==> 34287</h6>
                    <h6>Manar Magdy Wageed Abdelaal ==> 34237</h6>
                    <h6>Hana Youssef Ahmed Ali ==> 34273</h6>
                    <h6>Menna Emad Ali Hassan ==> 34262</h6>
                    <div>
                    </div>
                </div>
                <div class="flex">

                    <img src="images/onlineshopping.jpg">
                </div>
            </div>

        </div>
    </div>
@endsection

<style>
    {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "roboto", sans-serif;
    }

   

    .icon {
        margin: 0;
        font-size: 22px;
    }

    .aboutUs {
        padding: 80px 0px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    
    i {
        padding-top: 12px;
    }

    .row {
        display: :flex;
        flex-wrap: wrap;

    }

    .flex {
        flex: 0 0 100%;
        max-width: 100%;
        padding: 0 20px;
    }

    .aboutUs h2 {
        font-size: 45px;
        margin-bottom: 20px;
        color: #333;
    }

    .aboutUs h3 {
        font-size: 22px;
        color: #888;
        margin-bottom: 8px;
    }

    .aboutUs p {
        font-size: 18px;
        line-height: 1.5;
        color: #333;
        margin-bottom: 20px;
    }

    .aboutUs img {
        display: block;
        max-width: 100%;
        height: auto;
        margin-top: 30px;
    }

    .social-links {
        margin-bottom: 20px;
    }

    .social-links a {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        margin-right: 10px;
        color: #fff;
        background-color: #e9ecef;
        ;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        transition: all 0.4s ease;
    }

    .social-links a:hover {
        transform: translateY(-3px);
    }

    .btn {
        text-decoration: none;
        color: #fff;
        display: inline-block;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 5px;
        background-color: #333;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        transition: all 0.4s ease;
    }

    .btn:hover {
        transform: translateY(-3px);
    }

    @media screen and(max-width: 768px) {
        .row {
            flex-direction: column;
        }

        .flex {
            max-width: 100%;
        }

        .aboutUs h2 {
            font-size: 31px;
        }

        .aboutUs p {
            font-size: 16px;
        }

        .social-links a {
            width: 30px;
            height: 30px;
            line-height: 30px;
            font-size: 14px;
            margin-right: 5px;
        }

        .btn {
            font-size: 16px;
            padding: 8px 16px;
            margin-bottom: 30px;
        }
    }

    .members{
        text-align: center;
    }
</style>
