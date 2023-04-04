<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        @include('front.header')

        <div class="content">
            <div class="row drone-row">
                <div class="col-lg-6 drone-copy">
                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                </div>

                <div class="col-lg-6 drone-tablet">
                    Images here?
                </div>
            </div>

            <div class="row drone-row">
                <div class="col-lg-6 drone-tablet">
                    Images here?
                </div>

                <div class="col-lg-6 drone-copy">
                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                </div>
            </div>
        </div>

        @include('front.footer')
    </body>
</html>
