@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="content">
        <!-- Заголовок страницы -->
        <section class="content-header">
            <h1>Перечень заказов</h1>
        </section>
        <!-- Основной контент -->
        <section class="content">
            <div class="form-group">
                <a href="{{ url('admin/orders/create') }}" class="btn btn-success">Добавить заказ</a>
            </div>
            <!-- Таблица со списком категорий -->
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 5%;">ID</th>
                    <th style="width: 45%;">Товар</th>
                    <th style="width: 35%;">Клиент</th>
                    <th style="width: 10%;">Дата</th>
                    <th class="text-right" style="width: 5%;">Действия</th>
                </tr>
                </thead>
                <tbody>

                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>
                        <table>
                    @foreach($order->items as $item)
                        <tr>
                            <td class="table-td"><img src="/storage/uploads/{{ $item->photo }}" width="75px"></td>
                            <td class="table-td">{{  $item->title_ru }}</td>
                            <td class="table-td">
                                <div class="">Цена:</div>
                                <div>
                                    @if($item->discount)
                                        <span class="product-page__new-price item_price">{{ $item->price - $item->discount }} грн.</span>
                                    @else
                                        <span class="item_price">{{ $item->price }} грн</span>
                                    @endif
                                </div>

                            </td>
                            <td class="table-td">
                                <div>Размер:</div>
                                {{ $item->findSize($item->pivot->size_id) }}
                            </td>
                            <td class="table-td">
                                <div>Количество: </div>
                                <div class="quantity">{{ $item->pivot->quantity }}</div>
                            </td>
                        </tr>

                        @endforeach
                        </table>
                    </td>
                    <td>
                        <div class="for-order d-flex">
                            <div class="block">
                                <div>ФИО: {{ $order->full_name }}</div>
                                <div>Номер телефона: {{ $order->phone }}</div>
                                <div>Город: {{ $order->town }}</div>
                                <div>Отделение: {{ $order->department }}</div>
                            </div>
                            <div class="block">
                                @if($order->commentary)
                                    Комментарий: </br>
                                    {{ $order->commentary }}
                                @endif
                            </div>
                        </div>

                    </td>


                    <td>
                        {{ $order->created_at->format('d.m.Y')}}
                    </td>


                    <td class="text-right">
{{--                        <button><a href="{{ route('orders.edit', $order->id) }}"><i class="fa fa-pencil" style="color:black;"></i></a></button>--}}
                        {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                        <button onclick="return confirm('Are you sure?')" type="submit" class="delete">
                            <a><i class="fa fa-trash"></i></a>
                        </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </section>
        </div>
    </div>

@endsection
