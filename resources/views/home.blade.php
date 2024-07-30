<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-layout.meta />

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
            <p class="section__pre-title font-garamond">bonjour</p>

            <h1 class="section__title font-garamond">
                Serving Baked Goods <b>Every Day</b>
            </h1>

            <p class="section__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.
            </p>

            <a href="#products">
                <button class="hero__button">
                    <span class="hero__button__text">Shop Now</span>
                    <svg
                        class="text-primary"
                        width="27"
                        height="14"
                        viewBox="0 0 27 14"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <g clip-path="url(#clip0_2001_5)">
                            <path
                                d="M0 7L24 7"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                            <path
                                d="M18 15C18 15 20.9388 7.00003 27 7.00003C20.9388 7.00003 18 -1 18 -1"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                        </g>
                        <defs>
                            <clipPath id="clip0_2001_5">
                                <rect width="27" height="14" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </a>
        </div>
    </section>

    <section class="follow-us">
        <div class="section__content">
            <p class="section__pre-title font-jost">patisserie</p>

            <h1 class="section__title font-garamond">Lorem Ipsum</h1>

            <p class="section__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.
            </p>

            <p class="section__text">
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.
            </p>

            <div class="follow-us__footer">
                <p class="follow-us__footer__text">Follow Us</p>

                <div class="follow-us__socials">
                    <a href="#">
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g clip-path="url(#clip0_0_106)">
                                <path
                                    d="M6.32539 12.7824H8.95618V23.6129C8.95618 23.8267 9.12944 24 9.34327 24H13.8039C14.0177 24 14.191 23.8267 14.191 23.6129V12.8334H17.2153C17.4119 12.8334 17.5774 12.6859 17.5998 12.4905L18.0591 8.50328C18.0718 8.39357 18.037 8.28372 17.9636 8.20142C17.8901 8.11905 17.785 8.0719 17.6747 8.0719H14.1911V5.57249C14.1911 4.81905 14.5968 4.43698 15.397 4.43698C15.511 4.43698 17.6747 4.43698 17.6747 4.43698C17.8885 4.43698 18.0618 4.26364 18.0618 4.04988V0.389961C18.0618 0.176129 17.8885 0.00286452 17.6747 0.00286452H14.5357C14.5136 0.00178065 14.4644 0 14.3919 0C13.8473 0 11.9542 0.106916 10.4587 1.48266C8.8018 3.0072 9.03213 4.83259 9.08717 5.14908V8.07182H6.32539C6.11156 8.07182 5.93829 8.24508 5.93829 8.45892V12.3952C5.93829 12.6091 6.11156 12.7824 6.32539 12.7824Z"
                                    fill="#231F20"
                                />
                            </g>
                            <defs>
                                <clipPath id="clip0_0_106">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="#">
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M23.9279 7.05255C23.8695 5.77519 23.6666 4.90287 23.3699 4.13968C23.0687 3.33895 22.5964 2.61366 21.9858 2.01418C21.3866 1.40369 20.6611 0.931098 19.8604 0.629709C19.097 0.33325 18.2249 0.130553 16.9475 0.0725133C15.6678 0.0139201 15.2589 0 12 0C8.7411 0 8.33223 0.0139199 7.05251 0.072144C5.77516 0.130553 4.90303 0.333434 4.13966 0.630064C3.33894 0.931282 2.61365 1.40369 2.01417 2.01418C1.40368 2.61348 0.931092 3.33877 0.629705 4.1395C0.333248 4.90287 0.130552 5.77519 0.0725129 7.05236C0.01392 8.33228 0 8.74097 0 11.9999C0 15.259 0.01392 15.6679 0.0725129 16.9476C0.130737 18.2248 0.333617 19.0972 0.630246 19.8605C0.931462 20.661 1.40387 21.3866 2.01434 21.9858C2.61365 22.5963 3.33912 23.0687 4.13984 23.3699C4.90303 23.6668 5.77534 23.8695 7.05268 23.9279C8.3326 23.9863 8.74129 24 12.0003 24C15.2592 24 15.668 23.9863 16.9478 23.9279C18.2251 23.8695 19.0972 23.6668 19.8605 23.3699C21.4724 22.7467 22.7467 21.4724 23.3699 19.8605C23.6668 19.0972 23.8695 18.2248 23.9279 16.9476C23.9862 15.6678 24 15.259 24 12.0001C24 8.74097 23.9862 8.33228 23.9279 7.05255ZM21.7678 16.8493C21.7145 18.0194 21.5189 18.6548 21.3547 19.0775C20.9509 20.1242 20.1239 20.9513 19.0773 21.3551C18.6544 21.5193 18.019 21.7148 16.849 21.7681C15.584 21.8259 15.2043 21.8381 12 21.8381C8.79549 21.8381 8.41609 21.8259 7.15083 21.7681C5.98097 21.7148 5.34559 21.5193 4.92262 21.3551C4.4015 21.1626 3.93 20.8559 3.54291 20.4573C3.14429 20.0701 2.83759 19.5989 2.64514 19.0775C2.4809 18.6548 2.28534 18.0194 2.23206 16.8493C2.17438 15.5841 2.16211 15.2044 2.16211 12.0003C2.16211 8.7959 2.17438 8.41651 2.23206 7.15106C2.28553 5.981 2.4809 5.34562 2.64514 4.92283C2.83759 4.40153 3.14448 3.93003 3.54291 3.54293C3.93 3.14431 4.4015 2.83761 4.9228 2.64534C5.34559 2.48091 5.98097 2.28554 7.15102 2.23208C8.41628 2.17439 8.79585 2.16212 12 2.16212C15.2041 2.16212 15.5836 2.17439 16.849 2.23226C18.019 2.28554 18.6543 2.48109 19.0773 2.64534C19.5984 2.83779 20.0699 3.1445 20.457 3.54293C20.8556 3.93003 21.1622 4.40153 21.3546 4.92283C21.5189 5.34562 21.7145 5.981 21.7678 7.15106C21.8255 8.41633 21.8378 8.7959 21.8378 12.0001C21.8378 15.2044 21.8257 15.5838 21.7678 16.8493ZM11.9995 5.83776C8.59622 5.83776 5.83736 8.59681 5.83736 12.0001C5.83736 15.4032 8.59622 18.1622 11.9995 18.1622C15.4029 18.1622 18.1617 15.4032 18.1617 12.0001C18.1617 8.59681 15.4029 5.83776 11.9995 5.83776ZM11.9995 16C9.79047 15.9998 7.99947 14.2091 7.99966 11.9998C7.99966 9.79079 9.79048 7.99989 11.9996 7.99989C14.2087 8.00007 15.9996 9.79079 15.9996 11.9998C15.9996 14.2091 14.2086 16 11.9995 16ZM18.4058 7.03434C19.2011 7.03434 19.8458 6.38962 19.8458 5.59439C19.8458 4.79897 19.2011 4.15426 18.4058 4.15426C17.6104 4.15426 16.9657 4.79897 16.9657 5.59439C16.9657 6.38962 17.6104 7.03434 18.4058 7.03434Z"
                                fill="#231F20"
                            />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="products">
        <div class="container">
            <div class="products__slider"></div>
        </div>
    </section>
</main>
</body>
</html>
