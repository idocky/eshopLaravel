<?php

namespace App\Http\Controllers;

use App\Models\admin\Banner;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {

        $banners = Banner::pluck('photo');
        return view('main', ['banners' => $banners]);
    }

    public function changeLocale($locale)
    {
        session(['locale' => $locale]);
        App::setLocale($locale);
        $currentLocale = App::getLocale();
        return redirect()->back();
    }
}
