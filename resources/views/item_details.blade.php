@extends('layout')

@section('title')
    Подробнее
@endsection


@section('content')
    <div class="container">

        <div class="product-page">




            <div class="product-page__images">
                <div class="product-page__gallery">
                    @foreach($galleryPhoto as $gal)
                    <img class="product-page__gallery-image" src="/storage/uploads/{{ $gal }}" alt="Product Name" data-image-src="/storage/uploads/{{ $gal }}">
                    @endforeach
                </div>

                <img class="product-page__main-image" src="/storage/uploads/{{ $item->photo }}" alt="Product Name">

            </div>



            <div class="product-page__info">
                    <h1 class="product-page__title">{{ $item->{'title_' . $locale} }}</h1>
                    <p class="product-page__price">
                        @if($item->discount)
                            <span class="product-page__new-price">{{ $item->price - $item->discount }} грн.</span>
                            <span class="product-page__discount-price">{{ $item->price }} грн.</span>
                        @else
                            <span class="ml-2">{{ $item->price }} грн.</span>
                        @endif


                    </p>
                    <div class="size-options">
                        @foreach($item_sizes as $is)
                        <div class="size-option" data-size="{{ $is->id }}">{{$is->name}}</div>
                        @endforeach
                    </div>
                    <div class="size-chart-wrapper">
                        <a href="#" class="size-chart-trigger">@lang('main.size_tables')</a>
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
                {!! Form::open(['route' => ['cart.add', $item->id]]) !!}
                <input type="hidden" id ="hidden_size" name="size" value="скрытое значение" hidden>
                <input type="number" name="quantity" min="1" value="1">
                <input type="submit" value="@lang('main.add_to_bag')" class="product-page__add-to-cart" >
                {!! Form::close() !!}




            </div>






        </div>

        <div class="product-features">
            <p class="product-description">{{ $item->{'description_' . $locale} }}</p>
            <table class="product-specifications">
                <tbody>
                @if($item->composition->{'composition_' . $locale})
                <tr>
                    <td>@lang('main.composition'):</td>
                    <td>{{ $item->composition->{'composition_' . $locale} }}</td>
                </tr>
                @endif
                @if($item->color->{'title_' . $locale})
                <tr>
                    <td>@lang('main.color'):</td>
                    <td>{{ $item->color->{'title_' . $locale} }}</td>
                </tr>
                @endif
                @if($item->season->{'title_' . $locale})
                    <tr>
                        <td>@lang('main.season'):</td>
                        <td>{{ $item->season->{'title_' . $locale} }}</td>
                    </tr>
                @endif
                @if($item->collection->{'title_' . $locale})
                    <tr>
                        <td>@lang('main.collection'):</td>
                        <td>{{ $item->collection->{'title_' . $locale} }}</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>

        <div>
            <h4>@lang('main.can_like')</h4>
        </div>
        <br/>
        <div class="container">

            <div class="slider-container">
                <div class="slider-wrapper">
                    <a class="prev"><img src="/img/icon-left-arrow.png"></a>
                    <div class="slider">
                        @foreach($slider as $slide)
                            <div class="slide">
                                <a href="{{ url('collection/' . $slide->item->slug) }}" class="nav-link">
                                    <img src="/storage/uploads/{{ $slide->item->photo }}" alt="Product 1">
                                    <h3>{{ $slide->item->{'title_' . $locale} }}</h3>
                                    @if($slide->item->discount)
                                        <span class="text-muted">{{ $slide->item->price }} грн.</span>
                                        <span class="text-danger ml-2">{{ $slide->item->price - $slide->item->discount }} грн.</span>
                                    @else
                                        <span class="text-dark">{{ $slide->item->price }} грн.</span>
                                    @endif
                                </a>

                            </div>
                        @endforeach
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


        sizeOptions.forEach((option) => {
            option.addEventListener('click', () => {
                const selectedSize = option.getAttribute('data-size');
                let input = document.getElementById("hidden_size");
                input.value = selectedSize;
            });
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
