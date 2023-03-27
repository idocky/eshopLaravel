@extends('layout')

@section('content')

    <div class="container">
        <form action="/submit-order" method="POST">
            <div>
                <label for="fullname">ФИО:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div>
                <label for="phone">Телефон:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div>
                <label>Выберите способ доставки:</label>
                <input type="radio" id="delivery-novaposhta" name="delivery" value="novaposhta" required>
                <label for="delivery-novaposhta">Новая почта</label>
                <input type="radio" id="delivery-ukrposhta" name="delivery" value="ukrposhta" required>
                <label for="delivery-ukrposhta">Укрпочта</label>
            </div>
            <div id="novaposhta-fields" style="display:none">
                <label for="city">Город:</label>
                <input type="text" id="city" name="city">
                <label for="postoffice">Отделение:</label>
                <input type="text" id="postoffice" name="postoffice">
            </div>
            <div>
                <label>Выберите способ оплаты:</label>
                <input type="radio" id="payment-cash" name="payment" value="cash" required>
                <label for="payment-cash">Послеплата</label>
                <input type="radio" id="payment-card" name="payment" value="card" required>
                <label for="payment-card">Оплата картой</label>
            </div>
            <div>
                <label for="comments">Комментарий:</label>
                <textarea id="comments" name="comments"></textarea>
            </div>
            <button class="btn-dark" type="submit">Оформить заказ</button>
        </form>


    </div>
    <script>
        $(document).ready(function() {
            $('input[name="delivery"]').on('change', function() {
                if ($(this).val() === 'novaposhta') {
                    $('#novaposhta-fields').show();
                } else {
                    $('#novaposhta-fields').hide();
                }
            });
        });
    </script>



@endsection
