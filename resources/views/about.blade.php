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
                                    'Van E. French, Jr. is the Corporate Executive Pastry Chef of Genesis Hospitality.  He brings over thirty years of professional experience in the culinary and pastry arts to this new role.  His wide-ranging experience includes award winning pastry creations, chef management, and restaurant & bakery management.', "Van E. French, Jr. founded Van Earl's Cakes in Bucks County, PA from 2009 to 2019.  Specializing in high-end wedding cakes and gourmet desserts, Chef Van provided service to five-star venues in Philadelphia including The Ritz-Carlton Hotel, Four Seasons Hotel, and STARR Catering Group (now Constellation Culinary).  Prior to joining Genesis Hospitality, Chef Van served as Executive Pastry Chef at the esteemed Hotel Hershey 2019 to 2022 and directed pastry and dessert operations for the hotel's three restaurants and banquet facilities.", 'Chef Van has been featured in Philadelphia Wedding Magazine, The Philadelphia Modern Luxury Magazine and Philadelphia Style Magazine for his artistic and creative cake designs.  He is a three-time Food Network competitor; Food Network Season 2 "Cake Wars" in 2016, Food Network 2018 "Wedding Cake Championship" and Food Network 2018 "Holiday Gingerbread Showdown".'
                                ]
                            ],
                            [
                                'name' => 'Van French 2',
                                'position' => 'Corporate Executive Pastry Chef',
                                'image' => '/images/employees/2.png',
                                'story-cards' => [
                                    "A former monk with a music and Spanish Literature degree from college, Kir decided to change gears and jump into the world of food. Raised on a farm in the countryside of Puerto Rico and with a genuine love and commitment to wholesome ingredients, this was a no brainer.", "A former monk with a music and Spanish Literature degree from college, Kir decided to change gears and jump into the world of food. Raised on a farm in the countryside of Puerto Rico and with a genuine love and commitment to wholesome ingredients, this was a no brainer.", "His love for food has taken him to compete in multiple pastry competitions and appearances on the Food Network. He is a 1998 graduate of the French Culinary Institute under the mentorship of Jacques Torres, Alain Sailhac, Jacques Pepin and Andre Soltner, and has taken additional classes across the United States and in Italy. Chef Kir has worked in renowned Manhattan institutions such as Daniel, Union Square Cafe, Le Cirque and Orso. He later taught at the International Culinary Center (formerly the French Culinary Institute) for 16 years."
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
                                    "Eben Copple loves food, drawing culinary inspiration from the local Kansas farmer's markets he visited with his parents in his youth. The Kansas native honed his chef credentials at local restaurants like Lidia's Kansas City, owned by celebrity chef, television host, author, and restauranteur Lidia Bastianich, and Eleven, an innovative eatery in Pittsburgh, PA's Strip District.", "Chef Eben continued his career at several of New York City's top restaurants, including WD-50, a Lower East Side mecca of modernist cooking; Barbuto, a beloved West Village Italian spot; and Jovia, a New American restaurant tucked in an Upper East Side townhouse. In 2007, Eben brought his passion for fresh, local flavor to the Yardley Inn in Yardley, PA, as Executive Chef. There, he started the organic riverside kitchen garden that provided a variety of vegetables and herbs for his seasonal menus.", "As Culinary Director of Genesis Hospitality, Eben works closely with the Executive Chefs in the group - at properties such as The Peacock Inn, Chez Alice Patisserie in Princeton and Lambertville, NJ; Proof Pizza in Princeton, NJ; Nassau Diner in Princeton, NJ; Lambertville Station Restaurant and Inn in Lambertville, NJ; Washington Crossing Inn in Washington Crossing, PA; and Yardley Inn in Yardley, Pa - to build upon their unique restaurant concepts and develop new, exciting ones."
                                ]
                            ],
                           [
                                'name' => 'Wayne Susser',
                                'position' => 'Assistant Director of Hospitality',
                                'image' => '/images/employees/4.png',
                                 'story-cards' => [
                                    "Wayne Susser, a veteran hotelier, has been in the hospitality business for over thirty years. He began his career as an hourly employee with Hilton. With vast experience in both front and back of the house, he worked his way up to Management positions including New York Hilton and Towers and Pittsburgh Hilton. As a General Manager, he ran Doubletree South Park, South Carolina; Doubletree Plymouth Meeting in Pennsylvania; and Doubletree Somerset in New Jersey. Wayne eventually transitioned into the role of Sr. Brand Manager and Sr. Hotel Director of Hotel Growth and Cultural Development for Doubletree's International properties in EMEA and APAC. He held the positon of Vice President of Brand operations for Wyndham Hotels and Resorts and most recently Vice President of Franchise Sales & Development at Radisson Hotel Group., overseeing the East Coast Region.", "Wayne received an Associates degree in Culinary Arts from the Culinary Institute of America in Hyde Park, NY, and a Bachelors of Arts degree in Business Administration from Upsala College in East Orange, NJ. His certification include Certified Hotel Administrator (CHA) and Certified Revenue Management Executive (CRME)."
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
                                    'Michelle Mohollen is no stranger to hospitality and food service, with over four decades of industry experience. She began her career with Disney Universityâ€™s Hospitality program and as General Manager of El Torito Mexican Cantino.  Michelle was a fixture at the Yardley Inn as General Manager for 35 years. In 2023, Michelle transitioned into a Corporate position in Genesis Hospitality, where she utilizes her seasoned leadership at other Genesis Hospitality concepts.', 'She is currently the General Manager of Chez Alice Patisserie in Princeton. Michelle is dedicated to excellence and passionate about providing an enjoyable customer experience. During her free time, Michelle enjoys pilates and spending time at the beach with her family, especially her three grandsons.'
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

                                    <div class="about__employee__info__wrapper">
                                        <div class="about__employee__info">
                                            <p
                                                class="about__employee__name font-garamond">{{ $employer['name']  }}</p>
                                            <p class="about__employee__position">{{ $employer['position']  }}</p>
                                        </div>

                                        <div class="about__employee__story-cards">
                                            @foreach($employer['story-cards'] as $storyCard)
                                                <div class="about__employee__story-card">
                                                    {{ $storyCard  }}
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="about__employee__story-cards__pagination">
                                            @foreach($employer['story-cards'] as $index => $storyCard)
                                                <div class="about__employee__story-cards__pagination__bullet"
                                                     data-index="{{ $index  }}">
                                                </div>
                                            @endforeach
                                        </div>
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
                    }, 50);
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
                    this.currentSlide = this.slider.querySelector(`.about__employee[data-index="${this.sliderCurrentIndex}"]`);

                    const handleCurrentSlide = () => {
                        this.slider.style.transform = `translateX(-${this.sliderCurrentIndex * offset}px)`;

                        setTimeout(() => {
                            this.slider.style.filter = "grayscale(0%)";
                            this.currentSlide.style.scale = "1";

                            this.handleSlideStoryCards(this.currentSlide);
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

            handleSlideStoryCards(slide) {
                const bullets = slide.querySelectorAll(".about__employee__story-cards__pagination__bullet");
                const storyCardsWrapper = slide.querySelector(".about__employee__story-cards");


                const makeActive = (node, index) => {
                    bullets.forEach(e => e.classList.remove("active"));
                    node.classList.add("active");
                    const offset = storyCardsWrapper.getBoundingClientRect().width;
                    storyCardsWrapper.style.transform = `translateX(-${offset * index}px)`;
                };

                makeActive(bullets[0], 0);

                bullets.forEach(node => {
                    const index = node.dataset["index"];

                    node.addEventListener("click", (e) => {
                        makeActive(node, index);
                    });
                });
            }
        }

        function debounce(func, wait) {
            let timeout;

            return function(...args) {
                const context = this;

                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(context, args), wait);
            };
        }

        const init = debounce(() => new About(), 100)

        init()

        window.addEventListener('resize', () => {
            init()
        })
    </script>
</main>
</body>
</html>
