<?php

namespace App\Http\Controllers;

use App\Models\admin\Banner;
use App\Models\admin\Slider;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {

        $banners = Banner::pluck('photo');
        $slider = Slider::all();
        $locale = (session('locale') == 'ua') ? 'ua' : 'ru';

        return view('main', ['banners' => $banners, 'slider' => $slider, 'locale' => $locale]);
    }

    public function changeLocale($locale)
    {
        session(['locale' => $locale]);
        App::setLocale($locale);
        $currentLocale = App::getLocale();
        return redirect()->back();
    }
}
