@extends('layout')

@section('title')

@endsection

@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">№{{ $order->id }}</h5>
                Заказ от {{ $order->created_at }}
            </div>
            <div class="card-body checkout">

                <div>
                    <p class="card-text">Информация о заказе:</p>
                    <div>
                        Отделение: {{ $order->town }}
                        {{ $order->department }}
                    </div>
                    <div>
                        ФИО: {{ $order->full_name }}
                    </div>
                </div>
                <div>
                    <table>

                    @foreach($order->items as $item)
                            <tr>
                                <td class="table-td"><img src="/storage/uploads/{{ $item->photo }}" width="75px"></td>
                                <td class="table-td">{{  $item->{'title_' . $locale} }}</td>
                                <td class="table-td">
                                    <div class="">Цена:</div>
                                    <div>
                                        @if($item->discount)
                                            <span class="product-page__new-price item_price">{{ $item->price - $item->discount }} грн.</span>
                                            <span class="product-page__discount-price">{{ $item->price }} грн.</span>
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
                                <td class="table-td">
                                    <div>Сумма: </div>
                                    <div class="total_price"></div>
                                </td>
                            </tr>

                        @endforeach
                    </table>
                </div>

            </div>
            <div class="card-footer d-flex justify-content-end">
                Итого: {{ $order->total_price }} грн.
            </div>

        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('.cart-item').each(function() {
                var price = $(this).find('.product-page__new-price').text() || $(this).find('.cart-item-price').text();
                price = parseFloat(price.replace(/[^\d\.]/g, ''));
                var quantity = parseInt($(this).find('input[name="quantity"]').val());
                var total = (price * quantity).toFixed(2);
                $(this).find('.total_item').text(total + ' грн');
            });

            var items = document.getElementsByClassName('table-td');
            for (var i = 0; i < items.length; i += 6) {
                var item_price = parseInt(items[i+2].getElementsByClassName('item_price')[0].innerText);
                var quantity = parseInt(items[i+4].getElementsByClassName('quantity')[0].innerText);
                var total_price = item_price * quantity;
                items[i+5].getElementsByClassName('total_price')[0].innerText = total_price + ' грн';
            }

        });


    </script>


@endsection
