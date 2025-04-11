<!DOCTYPE html>
<html lang="pt-br" @class([
    '2xl:text-base lg:text-sm text-xs leading-normal h-full scroll-smooth',
    $htmlClass,
])>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? sprintf('%s | %s', $title, config('app.name')) : config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('static/img/favicon.ico') }}">


    <!-- SEO -->
    <link rel="canonical" href="{{ $canonical }}">
    <meta property="og:title" content="{{ $title ?? config('app.name') }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:type" content="website">
    <meta property="og:description" content="{{ $description }}">
    @if ($image)
        <meta property="og:image" content="{{ $image }}">
    @endif
    <meta name="description" content="{{ str($description)->limit(170) }}">

    <meta name="theme-color" content="#11234E" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '576151954817709');
            fbq('track', 'PageView');
        </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{ $head ?? '' }}

    @livewireStyles
</head>

<body @class(['antialiased min-h-full flex flex-col w-full', $bodyClass])>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=576151954817709&ev=PageView&noscript=1"/></noscript>
    {{ $slot }}
    @livewireScriptConfig
</body>

</html>
