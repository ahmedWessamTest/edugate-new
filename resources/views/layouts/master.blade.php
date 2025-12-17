<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="{{ __('general.meta_description') }}" />
  <meta name="theme-color" content="#1CB280" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

  <title>{{ __('general.site_title') }}</title>
  <!-- LCP preload -->
   @if (request()->route()->getName() == 'home')
   <link rel="preload" as="image" href="{{asset('assets/images/home/1.svg')}}" fetchpriority="high" />
   @endif
  <!-- style preload -->
  <link rel="preload" fetchpriority="high" href="{{asset('assets/style/style.css')}}" as="style" />
  <!-- fav icon -->
  <link rel="icon" type="image/svg+xml" href="{{asset('assets/images/navbar/logo.png')}}" />
  <link rel="icon" type="image/png" href="{{asset('assets/images/favicon/favicon-96x96.png')}}" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="{{asset('assets/images/favicon/favicon.svg')}}" />
  <link rel="shortcut icon" href="{{asset('assets/images/favicon/favicon.ico')}}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicon/apple-touch-icon.png')}}" />

  <!-- fonts -->
  <link rel="preload" as="font" href="{{asset('assets/fonts/alexandria/Alexandria-Regular.woff2')}}" type="font/woff2"
    crossorigin />

  <!-- styles -->
  <link rel="stylesheet" media="print" onload="this.media='all'" href="{{asset('assets/style/rtl.css')}}" />
  <noscript>
    <link rel="stylesheet" href="{{asset('assets/style/rtl.css')}}" />
  </noscript>
  <link rel="stylesheet" href="{{asset('assets/style/style.css')}}" />
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
    href="{{asset('assets/style/main.css')}}" />
  <link rel="stylesheet" media="print" href="{{asset('assets/style/home.css')}}" onload="this.media='all'" />
  <noscript>
    <link rel="stylesheet" href="{{asset('assets/style/home.css')}}" />
  </noscript>

  <style>
    /* Loading screen critical styles */
    .loading-screen {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      will-change: opacity;
    }

    .loading-screen.hidden {
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .main-bg-image {
      position: absolute;
      inset-inline-end: 0;
      height: 100%;
      width: 50%;
      object-fit: cover;
    }
    @media screen and (min-width:1280px) {
    .xl\:flex {
      display: flex;
    }
  }
  [dir="ltr"] .footer-dec {
    text-align: center !important;
  }
  </style>
  @stack('styles')
</head>

<body>
  <div id="loading-screen" class="loading-screen">
    <div class="loader-content">
      <div class="loader-logo">
        <img src="{{asset('assets/images/navbar/logo.png')}}" alt="Edugate Logo" class="logo-img" width="120"
          height="39" decoding="async" />
      </div>
      <div class="loader-animation">
        <div class="book">
          <div class="book-page"></div>
          <div class="book-page"></div>
          <div class="book-page"></div>
        </div>
      </div>
      <div class="loader-text">
        <h2>{{ __('general.loader_title') }}</h2>
        <p>{{ __('general.loader_text') }}</p>
      </div>
      <div class="loader-spinner">
        <div class="spinner-dot"></div>
        <div class="spinner-dot"></div>
        <div class="spinner-dot"></div>
      </div>
    </div>
  </div>
  <main class="relative z-10">
    <img src="{{asset('assets/images/home/2.svg')}}" role="presentation" height="7440" width="50%"
      class="main-bg-image h-full w-1/2 object-cover -z-10 ltr:-scale-x-[1]" decoding="async" loading="lazy" />
    @include('layouts.header')
      @include('layouts.hero')
    @yield('content')
  </main>
  @include('layouts.footer')
  <!-- Floating Action Buttons -->
  <div class="fixed-actions">
    <!-- WhatsApp Button -->
    <a href="https://wa.me/YOUR_PHONE_NUMBER" target="_blank" rel="noopener noreferrer" class="whatsapp-btn"
      aria-label="Contact us on WhatsApp">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
        <path
          d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
      </svg>
    </a>
    <button id="scroll-to-top" class="scroll-top-btn" aria-label="Scroll to top">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
        <polyline points="18 15 12 9 6 15"></polyline>
      </svg>
    </button>
  </div>
  @include('layouts.scripts')
  @stack('scripts')
</body>


</html>