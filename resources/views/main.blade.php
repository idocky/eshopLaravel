@extends('layout')

@section('title')
    ANION japanese style brand
@endsection

@section('content')
    <img src="/img/{{ $banners[0] }}" alt="" width="100%">
    <div class="second-row">
        <img src="/img/{{ $banners[1] }}" class="poster-row2">
        <img src="/img/{{ $banners[2] }}" class="poster-row2">
    </div>
    <div class="third-row">
        <img src="/img/{{ $banners[3] }}" class="poster-row3">
        <img src="/img/{{ $banners[4] }}" class="poster-row3">
        <img src="/img/{{ $banners[5] }}" class="poster-row3">
    </div>

    <div class="container">
        <div class="title">
            <h4>@lang('main.collection')</h4>
        </div>

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


    <script>
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
    </script>

@endsection
