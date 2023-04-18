@extends('layout')

@section('title')
    Коллекция ANION
@endsection

@section('content')
    <div class="from-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="mb-3">
                    <a class="nav-link" href="{{ url('collection') }}">
                        <div class="card-header mb-4 d-flex justify-content-center ">
                            <div class="margin-r"><img src="/img/icon-refresh.png"  width="25px"></div>@lang('main.refresh')
                        </div>
                    </a>

                    <div class="card-header">
                        @lang('main.categories')
                    </div>
                    <ul class="list-group list-group-flush categories">
                        @foreach($categories as $category)
                        <li class="list-group-item"><a class="nav-link element" href="?categories={{$category->slug}}">{{ $category->{'title_' . $locale} }}</a></li>
                        @endforeach
                    </ul>

                    <div class="card-header ">
                        @lang('main.nav_collection')
                    </div>
                    <ul class="list-group list-group-flush collections">
                        @foreach($collections as $collection)
                        <li class="list-group-item"><a class="nav-link element" href="?collections={{ $collection->slug }}">{{ $collection->{'title_' . $locale} }}</a></li>
                        @endforeach
                    </ul>
                    <div class="card-header">
                        @lang('main.tags')
                    </div>
                    <ul class="list-group list-group-flush mt-2 tags">
                        <div>
                            @foreach($tags as $tag)
                                <div class="tag-card" style="background-color: {{ $tag->color }}; color: {{ $tag->text_color }};">
                                    <a class="nav-link element" href="?tags={{ $tag->slug }}"><h5 class="tag-card-title">{{ $tag->{'title_' . $locale} }}</h5></a>
                                </div>

                            @endforeach
                        </div>
                    </ul>
                </div>

            </div>

            <div class="col-md-9">

                <div class="d-flex justify-content-end my-dropdown">
                    <div class="btn-group">
                        <button class="btn btn-sm dropdown-toggle my-dropdown-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('main.sort')
                        </button>
                        <ul class="dropdown-menu my-dropdown-menu">
                            <li><a class="nav-link my-dropdown-item" href="#">@lang('main.cheap')</a></li>
                            <li><a class="nav-link my-dropdown-item" href="#">@lang('main.expensive')</a></li>
                            <li><a class="nav-link my-dropdown-item" href="#">@lang('main.new')</a></li>
                        </ul>
                    </div>
                </div>


                <br/>

                <div class="row">

                    @foreach($items as $item)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <a class="nav-link" href="{{ url('/collection/' . $item->slug) }}">
                                    <img class="card-img-top" src="/storage/uploads/{{ $item->photo }}" alt="Товар 1">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $item->{ 'title_' . $locale} }}</h4>

                                            <div>
                                                @if($item->discount)
                                                    <span class="text-danger">{{ $item->price - $item->discount }} грн.</span>
                                                    <span class="text-muted">{{ $item->price }} грн.</span>
                                                @else
                                                    <span class="text-dark">{{ $item->price }} грн.</span>
                                                @endif
                                            </div>

                                        <div>
                                            @foreach($item->tags as $tag)
                                                <div class="tag-card" style="background-color: {{ $tag->color }}; color: {{ $tag->text_color }};">
                                                    <h5 class="tag-card-title">{{ $tag->{'title_' . $locale} }}</h5>
                                                </div>

                                            @endforeach
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>

        </div>
    </div>
    </div>


<script>
    // Получаем все блоки и их элементы
    const categoriesBlock = document.querySelector('.categories');
    const categoriesElements = categoriesBlock.querySelectorAll('.element');
    const collectionsBlock = document.querySelector('.collections');
    const collectionsElements = collectionsBlock.querySelectorAll('.element');
    const tagsBlock = document.querySelector('.tags');
    const tagsElements = tagsBlock.querySelectorAll('.element');

    // Обработчик клика на элементе
    function handleElementClick(event) {
        event.preventDefault();

        const blockName = this.closest('.block').getAttribute('data-block-name');
        const elementName = this.getAttribute('data-element-name');

        const url = new URL(window.location.href);

        // Очищаем параметры, если кликнули на элемент другого блока
        if (url.searchParams.get(blockName) && url.searchParams.get(blockName) !== elementName) {
            url.searchParams.delete(blockName);
        }

        // Добавляем значение элемента к параметру
        url.searchParams.append(blockName, elementName);

        window.location.href = url.href;
    }

    // Добавляем обработчики событий клика для всех элементов
    categoriesElements.forEach(element => {
        element.addEventListener('click', handleElementClick);
    });

    collectionsElements.forEach(element => {
        element.addEventListener('click', handleElementClick);
    });

    tagsElements.forEach(element => {
        element.addEventListener('click', handleElementClick);
    });
</script>


@endsection
