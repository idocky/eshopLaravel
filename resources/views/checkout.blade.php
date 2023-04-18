@extends('layout')

@section('content')

    <div class="container">
        {!! Form::open(['route' => 'order.create', 'method' => 'post']) !!}
        <div class="checkout">
            <div class="half">
                    <div class="form-group">
                        <label for="fullname">ФИО:</label>
                        <input class="form-control" type="text" id="full_name" name="full_name" value="{{ $name }}" required>
                    </div>
                <div class="form-group">
                    <label for="phone">Телефон:</label>
                    <input class="form-control phone" type="tel" id="phone" name="phone" pattern="[0-9()+ -]*" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="text" id="email" name="email" required>
                </div>

                <div class="form-group">
                        <label>Выберите способ доставки:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="delivery-novaposhta" name="delivery" value="novaposhta" required>
                            <label class="form-check-label" for="delivery-novaposhta">Новая почта</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="delivery-ukrposhta" name="delivery" value="ukrposhta" required>
                            <label class="form-check-label" for="delivery-ukrposhta">Укрпочта</label>
                        </div>
                    </div>
                    <div id="novaposhta-fields" style="display:none">
                        <div class="form-group">
                            <label for="town">Город:</label>
                            <input class="form-control" type="text" id="town" name="town">
                        </div>
                        <div class="form-group">
                            <label for="department">Отделение:</label>
                            <input class="form-control" type="text" id="department" name="department">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Выберите способ оплаты:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="payment-cash" name="payment" value="cash" required>
                            <label class="form-check-label" for="payment-cash">Послеплата</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="payment-card" name="payment" value="card" required>
                            <label class="form-check-label" for="payment-card">Оплата картой</label>
                        </div>
                    </div>
                    <div class="comment-section">
                        <div class="comment-header">
                            Оставить комментарий
                            <div class="arrow-icon"></div>
                        </div>
                        <div class="comment-body" style="display: none;">
                            <textarea class="form-control" id="comments" rows="7" name="commentary"></textarea>
                        </div>
                    </div>

            </div>
            <div class="half p-4">
                @if(isset($cart) && $cart != null)

                    @foreach($cart as $name => $item)
                        <div class="cart-item">
                            <a href="{{ url('cart/remove/' . $name) }}"><div class="cart-item-close"></div></a>
                            <img src="/storage/uploads/{{ $item['product']->photo }}" alt="Product Image">
                            <div class="cart-item-info">
                                <div class="cart-item-name">{{ $item['product']->{'title_' . $locale} }}</div>
                                @if($item['product']->discount)
                                    <span class="product-page__new-price">{{ $item['product']->price - $item['product']->discount }} грн.</span>
                                    <span class="product-page__discount-price">{{ $item['product']->price }} грн.</span>
                                @else
                                    <div class="cart-item-price">{{ $item['product']->price }} грн.</div>
                                @endif
                                <div class="cart-item-size">Размер: {{ $item['product']->findSize($item['size']) }}</div>
                            </div>
                            <span class="mr-3 total_item text-center"></span>
                            <div class="cart-item-quantity">
                                <input type="number" class="quantity" name="quantity"  min="1" value="{{ $item['quantity'] }}" data-item="{{ $name }}">
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-end total">

                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button class="btn" type="submit" style="background-color: #f2f2f2;">Оформить заказ</button>
                    </div>
                @else
                    <div class="d-flex justify-content-center mt-5">
                        Корзина пуста
                    </div>

                @endif
            </div>
        </div>

        {!! Form::close() !!}





    </div>
    <script>


        $(document).ready(function() {
            $('input[name="delivery"]').on('change', function() {
                $('#novaposhta-fields').show();

            });
        });

            $(document).ready(function() {
            $('.cart-item').each(function() {
                var price = $(this).find('.product-page__new-price').text() || $(this).find('.cart-item-price').text();
                price = parseFloat(price.replace(/[^\d\.]/g, ''));
                var quantity = parseInt($(this).find('input[name="quantity"]').val());
                var total = (price * quantity).toFixed(2);
                $(this).find('.total_item').text(total + ' грн');
                updateTotal();
            });

        });

            $(document).ready(function() {
            $('input[name="quantity"]').on('change', function() {
                var cartItem = $(this).closest('.cart-item');
                var price = cartItem.find('.product-page__new-price').text() || cartItem.find('.cart-item-price').text();
                price = parseFloat(price.replace(/[^\d\.]/g, ''));
                var quantity = parseInt($(this).val());

                var inputElement = cartItem[0].querySelector('input.quantity');
                var itemValue = inputElement.dataset['item'];
                var itemQuantity = inputElement.value;

                var total = (price * quantity).toFixed(2);
                cartItem.find('.total_item').text(total + ' грн');
                updateTotal();

                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                var data = {
                    name: itemValue,
                    quantity: itemQuantity
                };

                $.ajax({
                    url: '{{ url("cart/changeQuantity") }}',
                    method: 'POST',
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // добавляем заголовок с токеном CSRF
                    },
                    success: function(response) {
                        // Обрабатываем успешный ответ от сервера
                        console.log(response);
                    },
                    error: function(error) {
                        // Обрабатываем ошибку при запросе
                        console.log(error);
                    }
                });

            });
        });

            function updateTotal()
            {

                var totalSum = 0; // переменная для хранения суммы

                $('.total_item').each(function() {
                var value = parseInt($(this).text()); // извлекаем число из текста и преобразуем его в число
                if (!isNaN(value)) {
                totalSum += value; // добавляем значение к сумме
            }
            });

                $('.total').text('Всего: ' + totalSum + ' грн.'); // записываем сумму в блок total

            }

        const commentHeader = document.querySelector('.comment-header');
        const commentBody = document.querySelector('.comment-body');

        commentHeader.addEventListener('click', () => {
            commentBody.style.display = commentBody.style.display === 'none' ? 'block' : 'none';
        });

    </script>




@endsection
