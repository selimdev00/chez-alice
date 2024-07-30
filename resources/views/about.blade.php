<!DOCTYPE html>
<html lang="en">
<head>
    <x-layout.meta />
    <title>About bakery | Bonjour</title>
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

    <section id="about" class="about">
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
                        ]
                    ]
                ],
               [
                    'id' => 'tab-2',
                    'title' => 'Corporate',
                    'employers' => [
                        [
                            'name' => 'Jane Doe',
                            'position' => 'Manager',
                            'image' => '/images/employees/2.png',
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
                            'name' => 'Jane Doe',
                            'position' => 'Manager',
                            'image' => '/images/employees/3.png',
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
                <input class="about__tabs__input" name="tabs" type="radio" id="{{ $tab['id'] }}"
                       @if ($loop->first) checked @endif />

                <label class="about__tabs__label font-lusitana" for="{{ $tab['id'] }}">{{ $tab['title'] }}</label>

                <div class="about__tabs__panel container">
                    <h1>{{ $tab['title'] }}</h1>

                    <div class="about__cards">
                        @foreach ($tab['employers'] as $employer)
                            <div class="about__card">
                                <img class="about__card__image" src="{{ $employer['image'] }}" alt="" />

                                <p class="about__card__name font-garamond">{{ $employer['name'] }}</p>
                                <p class="about__card__position font-garamond">{{ $employer['position'] }}</p>

                                <div class="about__card__story">
                                    @foreach ($employer['story-cards'] as $storyCard)
                                        <p class="about__card__story__card font-garamond">{{ $storyCard }}</p>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>
</body>
</html>
