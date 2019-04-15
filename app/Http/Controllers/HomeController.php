<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Category;
use App\Item;
use App\Aboutus;
use App\Logo;
use App\Info;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $categories = Category::all();
        $items = Item::all();
        $aboutuses = Aboutus::all();
        $logos = Logo::all();
        $infos = Info::all();
        return view('welcome',compact('sliders','categories','items','aboutuses','logos','infos'));
    }
}
