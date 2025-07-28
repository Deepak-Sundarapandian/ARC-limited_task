@extends('layouts.app')
@section('main-page')
    <img src="{{ asset('assets/1.jpg') }}" alt="banner" class="banner">
    <div class="content">
        <div class="container">
            <p>
                A R C is constantly inspired by the challenge to partner in the nation’s progress, and aims to continuously
                add value embracing ETHICAL MEANS and ensuring CUSTOMER DELIGHT. With determination and perseverance, we
                have catapulted A R C into one of the Largest ISO 9001 : 2015 Certified Surface Transport Organizations with
                Pan India Network. Like the majestic GARUDA in our logo, we aim to soar high, higher than sky heights.
            </p>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row justify-content-center"style="background-image: linear-gradient(#d8ce79, #d8ce79, #fff);">

            <div class="col-md-3 col-sm-6 mb-4">
                <h6 class="title">FULL LOAD & PART LOAD (LTL)</h6>

                <div class="service-card">
                    <div class="card-front">
                        <img src="{{ asset('assets/2.jpg') }}" alt="Full Load" class="img-fluid">
                    </div>
                    <div class="card-back">
                        <h6>FULL LOAD & PART LOAD (LTL)</h6>
                        <a href="#" class="btn btn-read">READ MORE</a>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 mb-4">
                <h6 class="title">FULL LOAD & PART LOAD (LTL)</h6>

                <div class="service-card">
                    <div class="card-front">
                        <img src="{{ asset('assets/3.jpg') }}" alt="ODC Cargo" class="img-fluid">
                    </div>
                    <div class="card-back">
                        <h6>ODC & PROJECT CARGO</h6>
                        <a href="#" class="btn btn-read">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <h6 class="title">FULL LOAD & PART LOAD (LTL)</h6>

                <div class="service-card">
                    <div class="card-front">
                        <img src="{{ asset('assets/4.jpg') }}" alt="ODC Cargo" class="img-fluid">
                    </div>
                    <div class="card-back">
                        <h6>ODC & PROJECT CARGO</h6>
                        <a href="#" class="btn btn-read">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <h6 class="title">FULL LOAD & PART LOAD (LTL)</h6>

                <div class="service-card">
                    <div class="card-front">
                        <img src="{{ asset('assets/5.jpg') }}" alt="ODC Cargo" class="img-fluid">
                    </div>
                    <div class="card-back">
                        <h6>ODC & PROJECT CARGO</h6>
                        <a href="#" class="btn btn-read">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid brand-carousal">
        <div class="container">
            <div class="clientele-section">
                <h3 class="clientele-title">PRESTIGIOUS CLIENTELE</h3>
                <div class="logo-slider">
                    <div class="slide-track">
                        <div class="slide"><img src="{{ asset('assets/brand-1.jpg') }}" alt="Coats"></div>
                        <div class="slide"><img src="{{ asset('assets/brand-2.jpg') }}" alt="Murugappa"></div>
                        <div class="slide"><img src="{{ asset('assets/brand-3.jpg') }}" alt="NALCO"></div>
                        <div class="slide"><img src="{{ asset('assets/brand-4.jpg') }}" alt="NMDC"></div>
                        <div class="slide"><img src="{{ asset('assets/brand-5.jpg') }}" alt="NTPC"></div>
                        <div class="slide"><img src="{{ asset('assets/brand-1.jpg') }}" alt="Raymond"></div>
                        <div class="slide"><img src="{{ asset('assets/brand-2.jpg') }}" alt="Reliance"></div>

                        <div class="slide"><img src="{{ asset('assets/brand-3.jpg') }}" alt="Coats"></div>
                        <div class="slide"><img src="{{ asset('assets/brand-4.jpg') }}" alt="Murugappa"></div>
                        <div class="slide"><img src="{{ asset('assets/brand-5.jpg') }}" alt="NALCO"></div>
                        <div class="slide"><img src="{{ asset('assets/brand-1.jpg') }}" alt="NMDC"></div>
                        <div class="slide"><img src="{{ asset('assets/brand-2.jpg') }}" alt="NTPC"></div>
                        <div class="slide"><img src="{{ asset('assets/brand-3.jpg') }}" alt="Raymond"></div>
                        <div class="slide"><img src="{{ asset('assets/brand-4.jpg')}}" alt="Reliance"></div>
                       
                    </div>
                </div>
            </div>
        </div>


    </div>

    <style>
        .banner {
            width: 100%;
        }

        .content {
            background-color: #7a0015;
            color: white;
        }

        .container p {
            padding: 18px;
            margin-bottom: 0 !important;
        }

        .service-card {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
            border: 2px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            perspective: 1000px;
        }

        .card-front,
        .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: all 0.5s ease;
        }

        .card-front img {
            max-height: 400px;
            object-fit: cover;
        }

        .card-front .title {
            margin-top: 10px;
            font-size: 15px;
            font-weight: bold;
            color: #7a0015;
            text-align: center;
        }

        .card-back {
            background-color: #7a0015;
            color: white;
            transform: rotateY(180deg);
            text-align: center;
            padding: 20px;
        }

        .card-back h6 {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .btn-read {
            background-color: orange;
            color: white;
            padding: 8px 20px;
            font-weight: bold;
            border: none;
            text-decoration: none;
        }

        .service-card:hover .card-front {
            transform: rotateY(180deg);
        }

        .service-card:hover .card-back {
            transform: rotateY(0deg);
        }

        .title {
            color: #7a0015;
            text-align: center;
        }

        .row {
            padding-top: 30px;
        }

        .brand-carousal {
            background-image: url(assets/ClienteleBackground.png);
            margin-top: 10px;
        }

        .client-logo-slider img {
            width: 100%;
            height: 120px;
            object-fit: contain;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: white;
        }

        .clientele-section {
           
             padding: 40px 20px;
            text-align: center;
        }

        .clientele-title {
             text-align: start;
            font-size: 27px;
            color: #7a0015;
            margin-bottom: 30px;
        }

        .logo-slider {
            overflow: hidden;
            position: relative;
        }

        .slide-track {
            display: flex;
            width: calc(250px * 14);
            animation: scroll 25s linear infinite;
        }

        .slide {
            width: 250px;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
            padding: 10px;
            box-sizing: border-box;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border: 1px solid #ddd;
            background: white;
            padding: 5px;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }
    </style>
@endsection
