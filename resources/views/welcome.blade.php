<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marine Debris and Non-Indigenous Species</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0C4C88">
    <meta name="msapplication-TileColor" content="#0C4C88">
    <meta name="theme-color" content="#ffffff">


    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&family=Prata&display=swap"
        rel="stylesheet">






    <style>
        body {
            margin: 0;
            height: 100%;
            min-height: 100%;
            font-family: 'Inter', sans-serif !important;
        }
    </style>
</head>

<body>
    <div id="index">

        <div class="full-page-loader">
            <div class="loading"></div>
        </div>

        <script src="{{mix('js/app.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.min.js"
            integrity="sha512-i3JuyB+yXgX08haAnY9OnbCuv+a0aB6eLeKh970IOC3XOeWVnOtZlcla55VztDzqCHbl2zn9gpeNu2VBNdvmdQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    </div>
</body>

</html>

<!-- Make sure you put this AFTER Leaflet's CSS -->