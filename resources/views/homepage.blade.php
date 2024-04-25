@extends('base')

@section('css')
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/homepage/favicon.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/homepage/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/homepage/main.css') }}">   
@endsection

@section('content')
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                LYLT Agency <i class="bx bxs-home-alt-2"></i>
            </a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="bx bx-home-alt-2"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#popular" class="nav__link">
                            <i class="bx bx-building-house"></i>
                            <span>Residences</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#value" class="nav__link">
                            <i class="bx bx-award"></i>
                            <span>Value</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="bx bx-phone"></i>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <a href="" class="button nav__button">Connexion</a>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        Discover <br> Most Suitable <br> Property
                    </h1>

                    <p class="home__description">
                        Find a variety of properties that suit you very easily, 
                        forget all difficulties in finding a residence for you
                    </p>

                    <form action="" class="home__search">
                        <i class='bx bx-map-pin'></i>
                        <input type="search" placeholder="Search by location..." class="home__search-input">
                        <button class="button">Search</button>
                    </form>

                    <div class="home__value">
                        <div>
                            <h1 class="home__value-number">
                                9K <span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Prenium <br> Product
                            </span>
                        </div>
                        <div>
                            <h1 class="home__value-number">
                                2K <span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Happy <br> Customer
                            </span>
                        </div>
                        <div>
                            <h1 class="home__value-number">
                                28K <span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Awards <br> Winning
                            </span>
                        </div>
                    </div>
                </div>

                <div class="home__images">
                    <div class="home__orbe"></div>
                    <div class="home__img">
                        <img src="{{ URL::asset('assets/img/homepage/home.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== LOGOS ====================-->
        <section class="logos section">
            <div class="logos__container container grid">
                <div class="logos__img">
                    <img src="{{ URL::asset('assets/img/homepage/logo1.png')}}" alt="">
                </div>
                <div class="logos__img">
                    <img src="{{ URL::asset('assets/img/homepage/logo2.png')}}" alt="">
                </div>
                <div class="logos__img">
                    <img src="{{ URL::asset('assets/img/homepage/logo3.png')}}" alt="">
                </div>
                <div class="logos__img">
                    <img src="{{ URL::asset('assets/img/homepage/logo4.png')}}" alt="">
                </div>
            </div>
        </section>

        <!--==================== POPULAR ====================-->
        <section class="popular section" id="popular">
            <div class="container">
                <span class="section__subtitle">Best Choise</span>
                <h2 class="section_title">
                    Popular Residences<span>.</span>
                </h2>

                <div class="popular__container swiper">
                    <div class="swiper-wrapper">
                        <article class="popular__card swiper-slide">
                            <img src="{{ URL::asset('assets/img/homepage/popular1.jpg')}}" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>66,356
                                </h2>
                                <h3 class="popular__title">
                                    Garden City Assat
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores, 
                                    Lima - Perú Av. Sol #9876
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{ URL::asset('assets/img/homepage/popular2.jpg')}}" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>35,159
                                </h2>
                                <h3 class="popular__title">
                                    Gables Luxurious House
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores, 
                                    Lima - Perú Av. Sol #9876
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{ URL::asset('assets/img/homepage/popular3.jpg')}}" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>75,043
                                </h2>
                                <h3 class="popular__title">
                                    Garden Orchard City
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores, 
                                    Lima - Perú Av. Sol #9876
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{ URL::asset('assets/img/homepage/popular4.jpg')}}" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>62,024
                                </h2>
                                <h3 class="popular__title">
                                    Luxurious City Garden
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores, 
                                    Lima - Perú Av. Sol #9876
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{ URL::asset('assets/img/homepage/popular5.jpg')}}" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>47,043
                                </h2>
                                <h3 class="popular__title">
                                    Aliva Private Garden
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores, 
                                    Lima - Perú Av. Sol #9876
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-button-next">
                        <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="bx bx-chevron-left"></i>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== VALUE ====================-->
        <section class="value section" id="value">
            <div class="value__container container grid">
                <div class="value__images">
                    <div class="value__orbe"></div>
                    <div class="value__img">
                        <img src="{{ URL::asset('assets/img/homepage/value.jpg') }}" alt="">
                    </div>
                </div>

                <div class="value__content">
                    <div class="value__data">
                        <span class="section__subtitle">Our Value</span>
                        <h2 class="section__title">
                            Value We Give To You<span>.</span>
                        </h2>
                        <p class="value__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aliquam consequuntur ratione, 
                            vel adipisci dolores quas culpa non asperiores quisquam odio libero? Aliquid ut, dolores maiores illo non praesentium vel.
                        </p>
                    </div>

                    <div class="value__accordion">
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class="bx bxs-shield-x value__accordion-icon"></i>
                                <h3 class="value__accordion-title">
                                    Best interest rates on the market
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class="bx bxs-down-arrow"></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur est eaque, delectus temporibus quisquam 
                                    ratione quis molestias dolorum vitae earum reiciendis atque provident ad enim mollitia voluptates assumenda? Voluptatem, earum.
                                </p>
                            </div>
                        </div>
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class="bx bxs-shield-x value__accordion-icon"></i>
                                <h3 class="value__accordion-title">
                                    Prevent unstable prices
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class="bx bxs-down-arrow"></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur est eaque, delectus temporibus quisquam 
                                    ratione quis molestias dolorum vitae earum reiciendis atque provident ad enim mollitia voluptates assumenda? Voluptatem, earum.
                                </p>
                            </div>
                        </div>
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class="bx bxs-shield-x value__accordion-icon"></i>
                                <h3 class="value__accordion-title">
                                    Security of your data
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class="bx bxs-down-arrow"></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur est eaque, delectus temporibus quisquam 
                                    ratione quis molestias dolorum vitae earum reiciendis atque provident ad enim mollitia voluptates assumenda? Voluptatem, earum.
                                </p>
                            </div>
                        </div>
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class="bx bxs-shield-x value__accordion-icon"></i>
                                <h3 class="value__accordion-title">
                                    Title
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class="bx bxs-down-arrow"></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur est eaque, delectus temporibus quisquam 
                                    ratione quis molestias dolorum vitae earum reiciendis atque provident ad enim mollitia voluptates assumenda? Voluptatem, earum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section" id="contact">
            <div class="contact__container container grid">
                <div class="contact__images">
                    <div class="contact__orbe"></div>

                    <div class="contact__img">
                        <img src="{{ URL::asset('assets/img/homepage/contact.png') }}" alt="">
                    </div>
                </div>

                <div class="contact__content">
                    <div class="contact__data">
                        <span class="section__subtitle">Contact Us</span>
                        <h2 class="section__title">
                            Easy to Contact us<span>.</span>
                        </h2>
                        <p class="contact__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem molestias cum, eum laboriosam sint consectetur cupiditate ea commodi ipsa a quo iure, 
                            dignissimos porro consequuntur perferendis. Animi neque repellat hic!
                        </p>
                    </div>

                    <div class="contact__card">
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class="bx bxs-phone-call"></i>
                                <div>
                                    <h3 class="contact__card-title">
                                        Call
                                    </h3>
                                    <p class="contact__card-description">
                                        022.321.165.19
                                    </p>
                                </div>

                                <button class="button contact__card-button">
                                    Call Now
                                </button>
                            </div>
                        </div>
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class="bx bxs-message-rounded-dots"></i>
                                <div>
                                    <h3 class="contact__card-title">
                                        Chat
                                    </h3>
                                    <p class="contact__card-description">
                                        022.321.165.19
                                    </p>
                                </div>

                                <button class="button contact__card-button">
                                    Chat Now
                                </button>
                            </div>
                        </div>
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class="bx bxs-video"></i>
                                <div>
                                    <h3 class="contact__card-title">
                                        Video Call
                                    </h3>
                                    <p class="contact__card-description">
                                        022.321.165.19
                                    </p>
                                </div>

                                <button class="button contact__card-button">
                                    Video Call Now
                                </button>
                            </div>
                        </div>
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class="bx bxs-envelope"></i>
                                <div>
                                    <h3 class="contact__card-title">
                                        Message
                                    </h3>
                                    <p class="contact__card-description">
                                        022.321.165.19
                                    </p>
                                </div>

                                <button class="button contact__card-button">
                                    Message Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SUBSCRIBE ====================-->
        <section class="subscribe section">
            <div class="subscribe__container container">
                <h1 class="subscribe__title">
                    Get Started with LYLT Agency
                </h1>
                <p class="subscribe__description">
                    Subscribe and find super attractive price
                    quotes from us, Find your residence soon
                </p>
                <a href="" class="button subscribe__button">
                    Get Started
                </a>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div>
                <a href="" class="footer__logo">
                    LYLT Agency <i class="bx bxs-home-alt-2"></i>
                </a>
                <p class="footer__description">
                    Our vision is to make all people <br>
                    the best place to live for them.
                </p>
            </div>

            <div class="footer__content">
                <div>
                    <h3 class="footer__title">
                        About
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">Features</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">News & Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer__title">
                        Company
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="" class="footer__link">How We Work?</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">Capital</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">Security</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer__title">
                        Support
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="" class="footer__link">FAQs</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">Support center</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer__title">
                        Follow Us
                    </h3>

                    <ul class="footer__social">
                        <a href="" target="_blank" class="footer__social-link">
                            <i class="bx bxl-facebook-circle"></i>
                        </a>
                        <a href="" target="_blank" class="footer__social-link">
                            <i class="bx bxl-instagram-alt"></i>
                        </a>
                        <a href="" target="_blank" class="footer__social-link">
                            <i class="bx bxl-pinterest"></i>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer__info container">
            <span class="footer__copy">
                &#169; maximelylt. All rights reserved
            </span>

            <div class="footer__privacy">
                <a href="">Terms & Agreements</a>
                <a href="">Privacy Policy</a>
            </div>
        </div>
    </footer>

@section('js')
    <script src="{{ URL::asset('assets/js/homepage/scrollreveal.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/homepage/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/homepage/main.js') }}"></script>
@endsection