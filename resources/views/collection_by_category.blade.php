@extends('layout')

@section('title')
    Коллекция ANION
@endsection

@section('content')
    <div class="from-top">
        <div class="container">
            <h1>Название категории</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="/img/third-block1.jpg" alt="Товар 1">
                        <div class="card-body">
                            <h4 class="card-title">Товар 1</h4>
                            <p class="card-text">Описание товара 1</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Купить</button>
                                </div>
                                <small class="text-muted">$19.99</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="/img/third-block1.jpg" alt="Товар 2">
                        <div class="card-body">
                            <h4 class="card-title">Товар 2</h4>
                            <p class="card-text">Описание товара 2</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Купить</button>
                                </div>
                                <small class="text-muted">$29.99</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="/img/third-block1.jpg" alt="Товар 3">
                        <div class="card-body">
                            <h4 class="card-title">Товар 3</h4>
                            <p class="card-text">Описание товара 3</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Купить</button>
                                </div>
                                <small class="text-muted">$39.99</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
