<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{url('/assets/user/css/home.css')}}" />

    <!-- Title -->
    <title>HealthyBites - Home</title>
    <link
      rel="shortcut icon"
      href="{{url('/assets/user/images/Logo-2.svg')}}"
      type="image/svg+xml"
    />

    <!-- Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap"
      rel="stylesheet"
    />

    <!-- Preload Images -->
    <link rel="preload" as="image" href="{{url('/assets/user/images/hero-slider-1.jpg')}}" />
    <link rel="preload" as="image" href="{{url('/assets/user/images/hero-slider-2.jpg')}}" />
    <link rel="preload" as="image" href="{{url('/assets/user/images/hero-slider-3.jpg')}}" />
  </head>

  <body id="top">
    <!-- Preloader -->
    <div class="preload" data-preaload>
      <div class="circle"></div>
      <p class="text">HealthyBites</p>
    </div>

    <!-- Top Bar -->
    <div class="topbar">
      <div class="container">
        <address class="topbar-item">
          <div class="icon">
            <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
          </div>
          <span class="span">
            Telekomunikasi St, Bandung Regency, Indonesia 40257, ID
          </span>
        </address>

        <div class="separator"></div>

        <div class="topbar-item item-2">
          <div class="icon">
            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
          </div>
          <span class="span">Daily : 7.00 am to 9.00 pm</span>
        </div>

        <a href="tel:+621234567890" class="topbar-item link">
          <div class="icon">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
          </div>

          <span class="span">+62 123 456 7890</span>
        </a>

        <div class="separator"></div>

        <a href="mailto:healthybites@restaurant.com" class="topbar-item link">
          <div class="icon">
            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
          </div>

          <span class="span">healthybites@restaurant.com</span>
        </a>
      </div>
    </div>

    <!-- Header -->
    <header class="header" data-header>
      <div class="container">
        <a href="#" class="logo">
          <img
            src="{{url('/assets/user/images/Logo-6.svg')}}"
            width="180"
            alt="HealthyBites - Home"
          />
        </a>

        <nav class="navbar" data-navbar>
          <button class="close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

          <a href="#" class="logo">
            <img
              src="{{url('/assets/user/images/Logo-6.svg')}}"
              width="180"
              alt="HealthyBites - Home"
            />
          </a>

          <ul class="navbar-list">
            <li class="navbar-item">
              <a href="#home" class="navbar-link hover-underline active">
                <div class="separator"></div>
                <span class="span">Home</span>
              </a>
            </li>

            <li class="navbar-item">
              <a href="#menu" class="navbar-link hover-underline">
                <div class="separator"></div>
                <span class="span">Menus</span>
              </a>
            </li>

            <li class="navbar-item">
              <a href="#about" class="navbar-link hover-underline">
                <div class="separator"></div>
                <span class="span">About Us</span>
              </a>
            </li>

            <li class="navbar-item">
              <a href="#services" class="navbar-link hover-underline">
                <div class="separator"></div>
                <span class="span">Our Services</span>
              </a>
            </li>

            <li class="navbar-item">
              <a href="#contact" class="navbar-link hover-underline">
                <div class="separator"></div>
                <span class="span">Contact</span>
              </a>
            </li>
          </ul>

          <div class="text-center">
            <p class="headline-1 navbar-title">Visit Us</p>

            <address class="body-4">
              Telekomunikasi St, Bandung Regency, <br />
              Indonesia 40257, ID
            </address>

            <p class="body-4 navbar-text">Open: 7.00 am - 9.00 pm</p>

            <a href="mailto:booking@grilli.com" class="body-4 sidebar-link"
              >booking@healthybites.com</a
            >

            <div class="separator"></div>

            <p class="contact-label">Booking Request</p>

            <a
              href="tel:+628123123456"
              class="body-1 contact-number hover-underline"
            >
              +62-123-123456
            </a>
          </div>
        </nav>

        <a href="#" class="btn btn-secondary">
          <span class="text text-1">Find A Table</span>

          <span class="text text-2" aria-hidden="true">Find A Table</span>
        </a>

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </button>

        <div class="overlay" data-nav-toggler data-overlay></div>
      </div>
    </header>

    <article>
      <!-- Hero -->
      <section class="hero text-center" aria-label="home" id="home">
        <ul class="hero-slider" data-hero-slider>
          <li class="slider-item active" data-hero-slider-item>
            <div class="slider-bg">
              <img
                src="{{url('/assets/user/images/hero-slider-1.jpg')}}"
                width="1880"
                height="950"
                alt=""
                class="img-cover"
              />
            </div>

            <p class="label-2 section-subtitle slider-reveal">
              Tradational & Hygine
            </p>

            <h1 class="display-1 hero-title slider-reveal">
              For the love of <br />
              delicious food
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>

              <span class="text text-2" aria-hidden="true"
                >View Our Menu</span
              >
            </a>
          </li>

          <li class="slider-item" data-hero-slider-item>
            <div class="slider-bg">
              <img
                src="{{url('/assets/user/images/hero-slider-2.jpg')}}"
                width="1880"
                height="950"
                alt=""
                class="img-cover"
              />
            </div>

            <p class="label-2 section-subtitle slider-reveal">
              delightful experience
            </p>

            <h1 class="display-1 hero-title slider-reveal">
              Flavors Inspired by <br />
              the Seasons
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>

              <span class="text text-2" aria-hidden="true"
                >View Our Menu</span
              >
            </a>
          </li>

          <li class="slider-item" data-hero-slider-item>
            <div class="slider-bg">
              <img
                src="{{url('/assets/user/images/hero-slider-3.jpg')}}"
                width="1880"
                height="950"
                alt=""
                class="img-cover"
              />
            </div>

            <p class="label-2 section-subtitle slider-reveal">
              amazing & delicious
            </p>

            <h1 class="display-1 hero-title slider-reveal">
              Where every flavor <br />
              tells a story
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>

              <span class="text text-2" aria-hidden="true"
                >View Our Menu</span
              >
            </a>
          </li>
        </ul>

        <button
          class="slider-btn prev"
          aria-label="slide to previous"
          data-prev-btn
        >
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button
          class="slider-btn next"
          aria-label="slide to next"
          data-next-btn
        >
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#" class="hero-btn has-after">
          <img
            src="{{url('/assets/user/images/hero-icon.png')}}"
            width="48"
            height="48"
            alt="booking icon"
          />

          <span class="label-2 text-center span">Book A Table</span>
        </a>
      </section>

    <!-- JS -->
    <script src="{{url('/assets/user/js/script.js')}}"></script>
  </body>
</html>
