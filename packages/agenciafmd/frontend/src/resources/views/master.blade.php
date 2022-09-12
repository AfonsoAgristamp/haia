<!doctype html>
<html lang="{{ strtolower(str_replace('_', '-', app()->getLocale())) }}">
<head>
    <x-admix-analytics::gtm.head/>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0">

    @if(config('app.env') !== 'production')
        <meta name="robots" content="noindex,nofollow">
        <meta name="googlebot" content="noindex,nofollow">
    @endif
    
    <x-social-meta
        title="{{ $__env->yieldContent('title', 'A cultura come a estratégia no café da manhã') }} | {{ config('app.name') }}"
        description="{{ $__env->yieldContent('description') }}"
    />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- refazer no pacote novo
    <!-- inicio PWA -->
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" sizes="192x192" href="/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#FFFFFF">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="{{ config('pwa.manifest.theme_color') }}">

    <!-- IOS -->
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-title" content="{{ config('pwa.manifest.name') }}"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="default"/>
    <!-- fim PWA -->
    --}}

    @if(config('app.env') === 'production')
        <script>
            console.log = function () {
            };
        </script>
    @endif

    <x-admix-analytics::site-verification/>

    {{-- refatorar --}}
    @if(isset($critical) && ($critical))
        <style>
            {!! @file_get_contents(public_path('/css/critical/' . $critical)) !!}
        </style>
    @endif

    @include('agenciafmd/frontend::partials.fonts-preload')

    <link rel="preload" href="{{ mix('/css/frontend.css') }}" as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ mix('/css/frontend.css') }}">
    </noscript>
    <script>
        /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
        !function (t) {
            "use strict";
            t.loadCSS || (t.loadCSS = function () {
            });
            var e = loadCSS.relpreload = {};
            if (e.support = function () {
                var e;
                try {
                    e = t.document.createElement("link").relList.supports("preload")
                } catch (t) {
                    e = !1
                }
                return function () {
                    return e
                }
            }(), e.bindMediaToggle = function (t) {
                var e = t.media || "all";

                function a() {
                    t.addEventListener ? t.removeEventListener("load", a) : t.attachEvent && t.detachEvent("onload", a), t.setAttribute("onload", null), t.media = e
                }

                t.addEventListener ? t.addEventListener("load", a) : t.attachEvent && t.attachEvent("onload", a), setTimeout(function () {
                    t.rel = "stylesheet", t.media = "only x"
                }), setTimeout(a, 3e3)
            }, e.poly = function () {
                if (!e.support()) for (var a = t.document.getElementsByTagName("link"), n = 0; n < a.length; n++) {
                    var o = a[n];
                    "preload" !== o.rel || "style" !== o.getAttribute("as") || o.getAttribute("data-loadcss") || (o.setAttribute("data-loadcss", !0), e.bindMediaToggle(o))
                }
            }, !e.support()) {
                e.poly();
                var a = t.setInterval(e.poly, 500);
                t.addEventListener ? t.addEventListener("load", function () {
                    e.poly(), t.clearInterval(a)
                }) : t.attachEvent && t.attachEvent("onload", function () {
                    e.poly(), t.clearInterval(a)
                })
            }
            "undefined" != typeof exports ? exports.loadCSS = loadCSS : t.loadCSS = loadCSS
        }("undefined" != typeof global ? global : this);
    </script>

    <livewire:styles/>

    @stack('head')
    
    <meta name="facebook-domain-verification" content="la8ajnq3cykheuyr7wh1k1m7wohjrv" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TBTVNVF');</script>
    <!-- End Google Tag Manager -->
</head>
<body class="{{ ($bodyClass) ?? '' }}">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBTVNVF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<x-admix-analytics::gtm.body/>

@stack('header')

@yield('header', View::make('agenciafmd/frontend::partials.header'))

@yield('content')

@yield('footer', View::make('agenciafmd/frontend::partials.footer'))

@stack('footer')

<script src="{{ mix('/js/frontend.js') }}"></script>

<livewire:scripts/>

@include('agenciafmd/frontend::partials.message')

@stack('scripts')

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '276621601327127');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=276621601327127&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

@if (config('app.env') === 'local')
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='//HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
        //]]>
    </script>
@endif
</body>
</html>
