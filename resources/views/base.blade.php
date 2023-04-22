<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- region links -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- endregion -->

        <!-- region scripts -->
        <!-- Uncomment and get jQuery working with npm -->
        <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
        <script src="{{ mix('js/app.js') }}"></script>
        <!-- endregion -->
    </head>

    <body>
        @include('front.header')
                    
        <div class="content">
            <div class="row drone-row">
                <div class="col-lg-6 drone-copy">
                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                </div>
                
                <div class="col-lg-6 drone-tablet-container"> 
                    <div class="drone-tablet">
                        <div id="house-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/house/DJI_0043.JPG') }}" class="d-block w-100" alt="Front view of property">
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('images/house/DJI_0052.JPG') }}" class="d-block w-100" alt="Overhead view of property">
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('images/house/DJI_0073.JPG') }}" class="d-block w-100" alt="Front overhead view of property">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row drone-row">
                <div class="col-lg-6 drone-tablet-container">
                    <div class="drone-tablet">
                        <div id="roof-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/house/DJI_0043.JPG') }}" class="d-block w-100" alt="Front view of property">
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('images/house/DJI_0052.JPG') }}" class="d-block w-100" alt="Overhead view of property">
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('images/house/DJI_0073.JPG') }}" class="d-block w-100" alt="Front overhead view of property">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 drone-copy">
                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                </div>
            </div>
        </div>

        @include('front.footer')
    </body>
</html>
