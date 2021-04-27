<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-86BBHG7Y7L"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-86BBHG7Y7L');

</script>

<title>{{ config('app.name') }} - @yield('title', 'Lập trình Website - CMS - CRM By Laravel')</title>

<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Meta SEO -->
<meta name="author" content="NGHIA23D.COM" />
<meta name="keywords" content="@yield('keywords', 'nghia23d, nghia23d.com, nghia 23d, nghia23dcom')" />
<meta name="description" content="@yield('description', 'Website cá nhân của Nghia23d')" />

<!-- Meta Property SEO -->
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ config('app.url') }}" />
<meta property="og:title" content="@yield('title', 'Lập trình Website - CMS - CRM By Laravel')" />
<meta property="og:description" content="@yield('description', 'Website cá nhân của Nghia23d')" />
<meta property="og:site_name" content="NGHIA23D.COM" />
<meta property="og:rich_attachment" content="true" />
<meta property="article:publisher" content="https://www.facebook.com/nghia23d" />

<!-- Favicon here -->
<link rel="shortcut icon" type="image/x-icon" href="/themes/{{ $theme }}/assets/img/favicon.ico" />

<!-- CSS here -->
{{-- <link rel="stylesheet" href="/themes/{{ $theme }}/assets/css/bootstrap.min.css" /> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link rel="stylesheet" href="/themes/{{ $theme }}/assets/css/owl.carousel.min.css" />
<link rel="stylesheet" href="/themes/{{ $theme }}/assets/css/flaticon.css" />
<link rel="stylesheet" href="/themes/{{ $theme }}/assets/css/slicknav.css" />
<link rel="stylesheet" href="/themes/{{ $theme }}/assets/css/animate.min.css" />
<link rel="stylesheet" href="/themes/{{ $theme }}/assets/css/magnific-popup.css" />
<link rel="stylesheet" href="/themes/{{ $theme }}/assets/css/fontawesome-all.min.css" />
<link rel="stylesheet" href="/themes/{{ $theme }}/assets/css/themify-icons.css" />
<link rel="stylesheet" href="/themes/{{ $theme }}/assets/css/slick.css" />
<link rel="stylesheet" href="/themes/{{ $theme }}/assets/css/nice-select.css" />
<link rel="stylesheet" href="/themes/{{ $theme }}/assets/css/style.css" />

<!-- Custom CSS -->
<link rel="stylesheet" href="/themes/{{ $theme }}/customs/styles.css" />
