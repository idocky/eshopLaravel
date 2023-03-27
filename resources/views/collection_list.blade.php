@extends('layout')

@section('title')
    Коллекция ANION
@endsection

@section('content')
    <div class="from-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-header">
                        Категории
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#">Категория 1</a></li>
                        <li class="list-group-item"><a href="#">Категория 2</a></li>
                        <li class="list-group-item"><a href="#">Категория 3</a></li>
                        <li class="list-group-item"><a href="#">Категория 4</a></li>
                    </ul>

                    <div class="card-header">
                        Категории
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#">Категория 1</a></li>
                        <li class="list-group-item"><a href="#">Категория 2</a></li>
                        <li class="list-group-item"><a href="#">Категория 3</a></li>
                        <li class="list-group-item"><a href="#">Категория 4</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <h1>Название категории</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <a class="nav-link" href="{{ url('/item/details') }}">
                                <img class="card-img-top" src="/img/third-block1.jpg" alt="Товар 1">
                                <div class="card-body">
                                    <h4 class="card-title">Товар 1</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <div>
                                            <span class="text-muted">$29.99</span>
                                            <span class="text-danger ml-2">$19.99</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <a class="nav-link" href="{{ url('/item/details') }}">
                                <img class="card-img-top" src="https://101da.ru/images/stati/nazvaniya-i-vidyi-tolstovok/zhenskoe-hudi.jpg" alt="Товар 1">
                                <div class="card-body">
                                    <h4 class="card-title">Товар 1</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <div>
                                            <span class="text-muted">$29.99</span>
                                            <span class="text-danger ml-2">$19.99</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <a class="nav-link" href="{{ url('/item/details') }}">
                                <img class="card-img-top" src="https://trikotazh-ryad.ru/upload/resize_cache/iblock/168/800_600_1/168bc07e94d5630aed7a57f66f94d309.jpg" alt="Товар 1">
                                <div class="card-body">
                                    <h4 class="card-title">Товар 1</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <div>
                                            <span class="text-muted">$29.99</span>
                                            <span class="text-danger ml-2">$19.99</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <a class="nav-link" href="{{ url('/item/details') }}">
                                <img class="card-img-top" src="/img/third-block1.jpg" alt="Товар 1">
                                <div class="card-body">
                                    <h4 class="card-title">Товар 1</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <div>
                                            <span class="text-muted">$29.99</span>
                                            <span class="text-danger ml-2">$19.99</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <a class="nav-link" href="{{ url('/item/details') }}">
                                <img class="card-img-top" src="/img/third-block1.jpg" alt="Товар 1">
                                <div class="card-body">
                                    <h4 class="card-title">Товар 1</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                        <div>
                                            <span class="text-muted">$29.99</span>
                                            <span class="text-danger ml-2">$19.99</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
    </div>



@endsection
