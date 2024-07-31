<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-layout.meta />
    <title>Baked Goods | News</title>
    @vite(['resources/css/app.css'])
</head>

<body>
<x-layout.header />

<main>
    @php
        $news = [
            [
                'date' => 'August 3, 2023',
                'description' => 'Genesis Hospitality Pastry Chef Invited To Attend Prestigious Culinary Master Class in Switzerland.',
                'pdfLink' => '/pdf/1.pdf'
            ],
            [
                'date' => 'January 5, 2023',
                'description' => 'Chez Alice Patisserie opens a new location in Downtown Lambertville.',
                'pdfLink' => '/pdf/2.pdf'
            ],
            [
                'date' => 'April 27, 2021',
                'description' => 'Chez Alice Patisserie Receives 2021 Best of Princeton Award',
                'pdfLink' => '/pdf/3.pdf'

            ]
        ]
    @endphp

    <section class="news">
        <div class="news__overlay" style="background-image: url('/images/overlay.png')"></div>

        <div class="news__container">

            @foreach ($news as $item)
                <div class="news__item">
                    <div class="news__item__info"><p class="news__date font-garamond">{{ $item['date'] }}</p>

                        <h2 class="news__title font-garamond">{{  $item['description'] }}</h2></div>

                    <button class="news__button" data-href="{{ $item['pdfLink']  }}">Read</button>
                </div>
            @endforeach
        </div>
    </section>

    <div id="pdf-modal" class="news__modal">
        <div class="news__modal__content">
            <span class="news__modal__close">&times;</span>
            <iframe id="pdf-frame" src="" width="100%" height="500px"></iframe>
        </div>
    </div>

    <script>
        const btns = document.querySelectorAll('.news__button');

        const modal = document.getElementById('pdf-modal');
        const openModalBtn = document.getElementById('openModalBtn');
        const closeBtn = document.querySelector('.news__modal__close')
        const pdfFrame = document.getElementById('pdf-frame');

        const closePdfModal = () => {
            modal.style.display = 'none';
            pdfFrame.src = '';
        }

        btns.forEach((btn) => {
            btn.addEventListener('click', () => {
                const href = btn.dataset['href']
                pdfFrame.src = href + '#toolbar=0&navpanes=0';
                modal.style.display = 'block';
            });
        });

        closeBtn.addEventListener('click', () => {
            closePdfModal()
        });

        window.addEventListener('click', (event) => {
            if (event.target == modal) {
                closePdfModal()
            }
        });
    </script>
</main>
</body>
</html>
