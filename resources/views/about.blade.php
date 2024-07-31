<!DOCTYPE html>
<html lang="en">
<head>
    <x-layout.meta />
    <title>About bakery | Bonjour</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<x-layout.header />

<main>
    <section class="hero">
        <div class="hero__noise" style="background-image: url('/images/hero-overlay.png')"></div>

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

    <section id="about" class="about">
        <div class="about__overlay" style="background-image: url('/images/overlay.png')"></div>

        <div class="about__container">


            @php
                $tabs = [
                    [
                        'id' => 'tab-1',
                        'title' => 'Chefs',
                        'employers' => [
                            [
                                'name' => 'Van French',
                                'position' => 'Corporate Executive Pastry Chef',
                                'image' => '/images/employees/1.png',
                                'story-cards' => [
                                    '1', '2', '3', '4'
                                ]
                            ],
                            [
                                'name' => 'Van French 2',
                                'position' => 'Corporate Executive Pastry Chef',
                                'image' => '/images/employees/2.png',
                                'story-cards' => [
                                    '1', '2', '3', '4'
                                ]
                            ]
                        ]
                    ],
                   [
                        'id' => 'tab-2',
                        'title' => 'Corporate',
                        'employers' => [
                            [
                                'name' => 'Eben Copple',
                                'position' => 'Director of Hospitality',
                                'image' => '/images/employees/3.png',
                                 'story-cards' => [
                                    '1', '2', '3', '4'
                                ]
                            ],
                           [
                                'name' => 'Wayne Susser',
                                'position' => 'Assistant Director of Hospitality',
                                'image' => '/images/employees/4.png',
                                 'story-cards' => [
                                    '1', '2', '3', '4'
                                ]
                            ]
                        ]
                    ],
                   [
                        'id' => 'tab-3',
                        'title' => 'Store management',
                        'employers' => [
                            [
                                'name' => 'Michelle Mohollen',
                                'position' => 'General Manager',
                                'image' => '/images/employees/5.png',
                                 'story-cards' => [
                                    '1', '2', '3', '4'
                                ]
                            ]
                        ]
                    ]
                ];
            @endphp

            <div class="about__tabs">
                @foreach ($tabs as $tab)
                    <div class="about__tab" data-id="{{ $tab['id']  }}">
                        {{ $tab['title']  }}
                    </div>
                @endforeach
            </div>

            @foreach ($tabs as $tab)
                <div data-id="{{ $tab['id']  }}" class="about__tab__content">
                    <div class="about__employees__wrapper">
                        <div class="about__employees">
                            @foreach ($tab['employers'] as $index => $employer)
                                <div class="about__employee" data-index="{{ $index  }}">
                                    <img
                                        class="about__employee__image"
                                        src="{{ $employer['image'] }}"
                                        alt=""
                                    />

                                    <div class="about__employee__info"><p
                                            class="about__employee__name font-garamond">{{ $employer['name']  }}</p>
                                        <p class="about__employee__position">{{ $employer['position']  }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach


            <div class="about__btns">
                <button class="about__btn about__prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                         style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg>
                </button>

                <button class="about__btn about__next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                         style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <script>
        class About {
            constructor() {
                this.tabs = document.querySelectorAll(".about__tab");
                this.activeTab = '{{ $tabs[0]['id']  }}';

                this.init();
            }

            init() {
                this.initTabs();
            }

            initTabs() {
                this.tabs.forEach(node => {
                    if (node.dataset["id"] === this.activeTab) {
                        this.selectTab(node);
                    }

                    node.addEventListener("click", (e) => {
                        this.selectTab(node);
                    });
                });
            }

            selectTab(node) {
                const id = node.dataset["id"];

                const prevTabContent = document.querySelector(".about__tab__content.active");
                const currentTabContent = document.querySelector(`.about__tab__content[data-id="${id}"]`);

                const showTab = () => {
                    this.activeTab = id;

                    currentTabContent.style.scale = 0.5;
                    currentTabContent.style.opacity = 0;
                    currentTabContent.classList.add("active");

                    setTimeout(() => {
                        currentTabContent.style.scale = 1;
                        currentTabContent.style.opacity = 1;
                        node.classList.add("active");

                        this.initSlider();
                    }, 50)
                };

                const closeTab = () => {
                    prevTabContent.style.scale = 0.5;
                    prevTabContent.style.opacity = 0;

                    setTimeout(() => {
                        node.classList.remove("active");
                        prevTabContent.classList.remove("active");
                        this.tabs.forEach(e => e.classList.remove("active"));

                        showTab();
                    }, 500);

                };

                if (prevTabContent) {
                    closeTab();
                } else {
                    showTab();
                }
            }

            initSlider() {
                this.slider = document.querySelector(".about__tab__content.active .about__employees");
                this.slides = this.slider.querySelectorAll(".about__employee");
                this.sliderButtons = {
                    prev: document.querySelector(".about__prev"),
                    next: document.querySelector(".about__next")
                };

                this.slideCount = this.slides.length;
                this.sliderCurrentIndex = 0;

                const updateSlidePosition = (prevIndex) => {
                    this.handleSliderButtons();

                    const offset = this.slider.getBoundingClientRect().width;
                    this.currentSlide = this.slider.querySelector(`[data-index="${this.sliderCurrentIndex}"]`);

                    const handleCurrentSlide = () => {
                        this.slider.style.transform = `translateX(-${this.sliderCurrentIndex * offset}px)`;

                        setTimeout(() => {
                            this.slider.style.filter = "grayscale(0%)";
                            this.currentSlide.style.scale = "1";
                        }, 300);
                    };

                    if (prevIndex !== undefined) {
                        this.slider.style.filter = "grayscale(100%)";

                        this.prevSlide = this.slider.querySelector(`[data-index="${prevIndex}"]`);

                        this.currentSlide.style.scale = "0.9";
                        this.prevSlide.style.scale = "0.9";

                        setTimeout(() => {
                            handleCurrentSlide();
                        }, 300);
                    } else {
                        handleCurrentSlide();
                    }
                };

                updateSlidePosition();

                this.sliderButtons.prev.addEventListener("click", () => {
                    const prevIndex = this.sliderCurrentIndex;
                    if (this.sliderCurrentIndex > 0) {
                        this.sliderCurrentIndex--;
                        updateSlidePosition(prevIndex);
                    }
                });


                this.sliderButtons.next.addEventListener("click", () => {
                    const prevIndex = this.sliderCurrentIndex;

                    if (this.sliderCurrentIndex < this.slideCount - 1) {
                        this.sliderCurrentIndex++;
                        updateSlidePosition(prevIndex);
                    }
                });

                this.handleSliderButtons();

            }

            handleSliderButtons() {
                if (this.slideCount === 1) {
                    this.sliderButtons.next.style.opacity = 0;
                    this.sliderButtons.prev.style.opacity = 0;
                }

                if (this.sliderCurrentIndex === 0) {
                    this.sliderButtons.prev.style.opacity = 0;
                } else {
                    this.sliderButtons.prev.style.opacity = 1;
                }

                if (this.sliderCurrentIndex === this.slideCount - 1) {
                    this.sliderButtons.next.style.opacity = 0;
                } else {
                    this.sliderButtons.next.style.opacity = 1;
                }
            }
        }

        new About();
    </script>
</main>
</body>
</html>
