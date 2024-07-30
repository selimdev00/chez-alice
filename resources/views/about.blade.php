<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-layout.header />

<main>
    <section class="hero">
        <div class="hero__noise"></div>

        <div class="hero__bg-images">
            <img class="hero__bg-image" src="./images/hero-image-1.png" alt="" />
            <img
                class="hero__bg-image"
                src="./images/hero-image-2.png"
                alt=""
                style="bottom: 0"
            />
            <img
                class="hero__bg-image"
                src="./images/hero-image-3.png"
                alt=""
                style="left: 54%; transform: translateX(-50%)"
            />
            <img
                class="hero__bg-image"
                src="./images/hero-image-4.png"
                alt=""
                style="right: 0"
            />
            <img
                class="hero__bg-image"
                src="./images/hero-image-5.png"
                alt=""
                style="right: 0; bottom: 0"
            />
        </div>

        <div class="section__content">
            <p class="section__pre-title font-garamond">about us</p>

            <h1 class="section__title font-garamond">
                What about bakery <b>Every Day</b>
            </h1>

            <p class="section__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.
            </p>

            <a href="#about">
                <button class="hero__button">
                    <span class="hero__button__text">Are you ready?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path
                            d="m18.707 12.707-1.414-1.414L13 15.586V6h-2v9.586l-4.293-4.293-1.414 1.414L12 19.414z"></path>
                    </svg>
                </button>
            </a>
        </div>
    </section>

    <section id="about" class="about"></section>
</main>
</body>
</html>
