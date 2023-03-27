@extends('layout')

@section('title')
    Подробнее
@endsection


@section('content')
    <div class="container">

        <div class="product-page">




            <div class="product-page__images">
                <div class="product-page__gallery">
                    <img class="product-page__gallery-image" src="/img/hoodi-1.png" alt="Product Name" data-image-src="/img/hoodi-1.png">
                    <img class="product-page__gallery-image" src="/img/hoodi-2.png" alt="Product Name" data-image-src="/img/hoodi-2.png">
                    <img class="product-page__gallery-image" src="/img/hoodi-3.png" alt="Product Name" data-image-src="/img/hoodi-3.png">
                    <img class="product-page__gallery-image" src="/img/hoodi-4.png" alt="Product Name" data-image-src="/img/hoodi-4.png">
                    <img class="product-page__gallery-image" src="/img/hoodi-5.png" alt="Product Name" data-image-src="/img/hoodi-5.png">
                </div>

                <img class="product-page__main-image" src="/img/hoodi-2.png" alt="Product Name">

            </div>



            <div class="product-page__info">
                    <h1 class="product-page__title">Толстовка chainsawman</h1>
                    <p class="product-page__price">
                        <span class="product-page__discount-price">$99.99</span>
                        <span class="product-page__new-price">$79.99</span>

                    </p>
                    <div class="size-options">
                        <div class="size-option" data-size="s">S</div>
                        <div class="size-option" data-size="m">M</div>
                        <div class="size-option" data-size="l">L</div>
                        <div class="size-option" data-size="xl">XL</div>
                        <div class="size-option" data-size="xxl">XXL</div>
                    </div>
                    <div class="size-chart-wrapper">
                        <a href="#" class="size-chart-trigger">Таблица размеров</a>
                        <div class="size-chart-modal">
                            <div class="size-chart-modal-content">
                                <table class="size-chart-table">
                                    <thead>
                                    <tr>
                                        <th>Размер</th>
                                        <th>Грудь (см)</th>
                                        <th>Талия (см)</th>
                                        <th>Бедра (см)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>XS</td>
                                        <td>76-81</td>
                                        <td>58-64</td>
                                        <td>81-86</td>
                                    </tr>
                                    <tr>
                                        <td>S</td>
                                        <td>84-89</td>
                                        <td>66-71</td>
                                        <td>89-94</td>
                                    </tr>
                                    <tr>
                                        <td>M</td>
                                        <td>91-97</td>
                                        <td>74-79</td>
                                        <td>97-102</td>
                                    </tr>
                                    <tr>
                                        <td>L</td>
                                        <td>99-104</td>
                                        <td>81-86</td>
                                        <td>104-109</td>
                                    </tr>
                                    <tr>
                                        <td>XL</td>
                                        <td>107-112</td>
                                        <td>89-94</td>
                                        <td>112-117</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <button class="size-chart-close">&times;</button>
                            </div>
                        </div>

                </div>


                    <h5></h5>
                    <div class="card-group">

                        <div class="card-post">
                            <img src="https://media.interfax.com.ua/media/thumbs/images/2021/06/q9VUeKB-TNOI.png" alt="Картинка 1">
                        </div>
                        <div class="card-post">
                            <img src="https://roz.otg.dp.gov.ua/storage/app/sites/19/uploaded-files/ukr-2.jpg" alt="Картинка 2">
                        </div>
                    </div>

                    <button class="add-to-cart product-page__add-to-cart">Добавить в корзину</button>


            </div>

            <div class="product-features">
                <p class="product-description">Этот товар отличается высоким качеством и удобством использования. Он идеально подходит для повседневной носки и позволит вам чувствовать себя комфортно в любой ситуации.</p>
                <table class="product-specifications">
                    <tbody>
                    <tr>
                        <td>Состав:</td>
                        <td>Хлопок 95%, Эластан 5%</td>
                    </tr>
                    <tr>
                        <td>Цвет:</td>
                        <td>Белый</td>
                    </tr>
                    <tr>
                        <td>Размеры:</td>
                        <td>S, M, L, XL</td>
                    </tr>
                    <tr>
                        <td>Производитель:</td>
                        <td>Название компании</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div>
                <h4>Вам может понравится</h4>
            </div>

            <div class="slider-container">
                <div class="slider-wrapper">
                    <a class="prev"><img src="/img/icon-left-arrow.png"></a>
                    <div class="slider">

                        <div class="slide">
                            <img src="/img/third-block1.jpg" alt="Product 1">
                            <h3>Product 1</h3>
                            <div class="price">$50.00</div>
                        </div>
                        <div class="slide">
                            <img src="/img/third-block1.jpg" alt="Product 1">
                            <h3>Product 1</h3>
                            <div class="price">$50.00</div>
                        </div>
                        <div class="slide">
                            <img src="/img/third-block1.jpg" alt="Product 1">
                            <h3>Product 1</h3>
                            <div class="price">$50.00</div>
                        </div>
                        <div class="slide">
                            <img src="/img/third-block1.jpg" alt="Product 1">
                            <h3>Product 1</h3>
                            <div class="price">$50.00</div>
                        </div>
                        <div class="slide">
                            <img src="/img/third-block1.jpg" alt="Product 2">
                            <h3>Product 2</h3>
                            <div class="price">$60.00</div>
                        </div>
                        <div class="slide">
                            <img src="/img/third-block1.jpg" alt="Product 3">
                            <h3>Product 3</h3>
                            <div class="price">$70.00</div>
                        </div>
                    </div>


                </div>

                <a class="next"><img src="/img/icon-right-arrow.png"></a>
            </div>


        </div>

    </div>


    <script>
        const mainImage = document.querySelector('.product-page__main-image');
        const galleryImages = document.querySelectorAll('.product-page__gallery-image');

        galleryImages.forEach((image) => {
            image.addEventListener('click', () => {
                // меняем основную картинку
                const imageSrc = image.getAttribute('data-image-src');
                mainImage.setAttribute('src', imageSrc);
                // меняем текущий слайд в слайдере
                const index = Array.from(galleryImages).indexOf(image);
                currentSlideIndex = index;
                // обновляем слайдер
                updateSlider();
            });
        });

        const sizeOptions = document.querySelectorAll('.size-option');
        const addToCartButton = document.querySelector('.add-to-cart');

        addToCartButton.addEventListener('click', () => {
            const selectedSize = document.querySelector('.size-option.selected').getAttribute('data-size');
            console.log(`Товар добавлен в корзину в размере ${selectedSize}`);
        });

        sizeOptions.forEach(option => {
            option.addEventListener('click', () => {
                sizeOptions.forEach(otherOption => otherOption.classList.remove('selected'));
                option.classList.add('selected');
            });
        });

        const sizeChartTrigger = document.querySelector('.size-chart-trigger');
        const sizeChartModal = document.querySelector('.size-chart-modal');
        const sizeChartClose = document.querySelector('.size-chart-close');

        // функция для открытия модального окна
        function openSizeChart() {
            sizeChartModal.style.display = 'block';
            document.body.style.overflow = 'hidden'; // блокируем прокрутку страницы
        }

        // функция для закрытия модального окна
        function closeSizeChart() {
            sizeChartModal.style.display = 'none';
            document.body.style.overflow = 'auto'; // разблокируем прокрутку страницы
        }

        // назначаем обработчики событий на кнопки
        sizeChartTrigger.addEventListener('click', openSizeChart);
        sizeChartClose.addEventListener('click', closeSizeChart);


        $(document).ready(function(){
            $('.slider').slick({
                dots: true, // показывать точки навигации
                infinite: true, // зациклить слайдер
                speed: 500, // скорость анимации
                slidesToShow: 4, // количество слайдов, которые отображаются одновременно
                slidesToScroll: 1, // количество слайдов, которые прокручиваются за один раз
                prevArrow: $('.slider-container .prev'), // Стрелка влево
                nextArrow: $('.slider-container .next'), // Стрелка вправо
                responsive: [
                    {
                        breakpoint: 768, // при ширине экрана менее 768 пикселей
                        settings: {
                            slidesToShow: 2 // отображать 2 слайда
                        }
                    },
                    {
                        breakpoint: 480, // при ширине экрана менее 480 пикселей
                        settings: {
                            slidesToShow: 1 // отображать 1 слайд
                        }
                    }
                ]
            });
        });


        const mainImageScope = document.querySelector('.product-page__main-image');
        const galleryImagesScope = document.querySelectorAll('.product-page__gallery-image');
        const newSlider = document.createElement('div');
        const sliderWrapper = document.createElement('div');
        const sliderContent = document.createElement('div');
        const overlay = document.createElement('div');

        newSlider.classList.add('new-slider');
        sliderWrapper.classList.add('new-slider__wrapper');
        sliderContent.classList.add('new-slider__content');
        overlay.classList.add('overlay');

        for (let i = 0; i < galleryImagesScope.length; i++) {
            const newSlide = document.createElement('div');
            const image = document.createElement('img');
            newSlide.classList.add('new-slide');
            image.src = galleryImagesScope[i].dataset.imageSrc;
            image.alt = galleryImagesScope[i].alt;
            newSlide.appendChild(image);
            sliderContent.appendChild(newSlide);
        }

        sliderWrapper.appendChild(sliderContent);
        newSlider.appendChild(sliderWrapper);
        document.body.appendChild(newSlider);
        document.body.appendChild(overlay);

        mainImageScope.addEventListener('click', function() {
            newSlider.classList.add('new-slider--active');
            overlay.classList.add('overlay--active');
            const currentImageSrc = mainImageScope.src;
            const currentSlide = document.querySelector(`[data-image-src="${currentImageSrc}"]`);
            const newSlides = newSlider.querySelectorAll('.new-slide');
            newSlides.forEach((slide) => {
                slide.classList.remove('new-slide--active');
            });
            currentSlide.parentNode.classList.add('new-slide--active');
        });

        overlay.addEventListener('click', function() {
            newSlider.classList.remove('new-slider--active');
            overlay.classList.remove('overlay--active');
        });

        const closeButton = document.createElement('button');
        closeButton.classList.add('new-slider__close-button');
        closeButton.innerHTML = '<img src="https://cdn-icons-png.flaticon.com/512/2938/2938566.png" width="40px">';
        newSlider.appendChild(closeButton);

        closeButton.addEventListener('click', function() {
            newSlider.classList.remove('new-slider--active');
            overlay.classList.remove('overlay--active');
        });

        const prevButton = document.createElement('button');
        prevButton.classList.add('new-slider__prev-button');
        prevButton.innerHTML = '&lt;';
        newSlider.appendChild(prevButton);

        const nextButton = document.createElement('button');
        nextButton.classList.add('new-slider__next-button');
        nextButton.innerHTML = '&gt;';
        newSlider.appendChild(nextButton);

        let currentSlideIndex = 0;
        const newSlides = newSlider.querySelectorAll('.new-slide');

        prevButton.addEventListener('click', function() {
            currentSlideIndex--;
            if (currentSlideIndex < 0) {
                currentSlideIndex = newSlides.length - 1;
            }
            updateSlider();
        });

        nextButton.addEventListener('click', function() {
            currentSlideIndex++;
            if (currentSlideIndex >= newSlides.length) {
                currentSlideIndex = 0;
            }
            updateSlider();
        });

        function updateSlider() {
            const slideWidth = newSlides[0].getBoundingClientRect().width;
            sliderContent.style.transform = `translateX(-${currentSlideIndex * slideWidth}px)`;
        }





    </script>

@endsection
