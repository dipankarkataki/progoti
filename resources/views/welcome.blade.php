<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="icon" type="image/png" href="{{asset('assets/logo/p-logo.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Progoti - Software Development, Web Development, App Development, UI/UX, Testing, Digital Marketing</title>

    <meta name="author" content="Progoti" />
    <meta name="description" content="Progoti offers top-notch software development, web development, app development, UI/UX design, testing, and digital marketing services. Contact us for innovative solutions!">
    <meta name="keywords" content="software development, web development, app development, UI/UX design, testing, digital marketing, Progoti, technology, solutions">
    <link rel="canonical" href="https://www.progoti.in">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="Progoti">
    <meta property="og:description" content="Progoti offers top-notch software development, web development, app development, UI/UX design, testing, and digital marketing services. Contact us for innovative solutions!">
    <meta property="og:url" content="https://www.progoti.in">
    <meta property="og:image" content="https://www.progoti.in/assets/logo/progoti-color.jpeg">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@progoti_india">
    <meta name="twitter:title" content="Progoti">
    <meta name="twitter:description" content="Progoti offers top-notch software development, web development, app development, UI/UX design, testing, and digital marketing services. Contact us for innovative solutions!">
    <meta name="twitter:image" content="https://www.progoti.in/assets/logo/progoti-color.jpeg">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/favicon/android-chrome-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{asset('assets/favicon/android-chrome-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon-16x16.png')}}">
    

    <meta name="theme-color" content="#ffffff" />

    <link rel="preconnect" href="{{asset('fonts.googleapis.com/index.html')}}" />
    <link rel="preconnect" href="{{asset('fonts.gstatic.com/index.html')}}" crossorigin />
    <link href="{{asset('fonts.googleapis.com/css2dfba.css?family=Hanken+Grotesk:wght@100;200;300;400;500;600;700;800&amp;family=Outfit:wght@300;400;500;600;700;800;900&amp;display=swap')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    
  </head>

<body>
    @include('website.overlay-mobile-menu')
    
    @include('website.header')

    @include('website.hero-section')

    @include('website.why-choose-us')
    
    @include('website.service')

    @include('website.about')

    @include('website.consultation')

    @include('website.work-with-us')

    @include('website.testimonial')

    @include('website.project')

    @include('website.contact-form')

    @include('website.footer')

    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
            transition: stroke-dashoffset 10ms linear 0s;
            stroke-dasharray: 307.919, 307.919;
            stroke-dashoffset: 307.919;
          "></path>
        </svg>
    </div>
    
    <script src="{{asset('assets/js/vendor/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>