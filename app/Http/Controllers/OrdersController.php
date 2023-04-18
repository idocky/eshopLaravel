<?php

namespace App\Http\Controllers;

use App\Models\Order;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function createOrder(Request $request)
    {
        $order = Order::add($request->all());
        $order->setStatus(1);
        $order->addUserId();
        $order->calculateTotalPrice();
        $order->setItems();
        session(['cart' => []]);

        return redirect()->route('order.thanks', ['id' => $order->id]);
    }

    public function thankspage($id)
    {
        $order = Order::find($id);
        $locale = (session('locale') == 'ua') ? 'ua' : 'ru';

        return view('thankspage', ['order' => $order, 'locale' => $locale]);
    }

    public function index()
    {
        $orders = Order::all();


        return view('admin.orders.index', ['orders' => $orders]);
    }

    public function destroy($id)
    {
        Order::find($id)->delete();
        return redirect()->route('orders.index');
    }
}
