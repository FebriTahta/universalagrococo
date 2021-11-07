<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\About;
use App\Models\Profile;
use App\Models\SpecialOffer;
use App\Models\Slider;
use App\Models\Ajakan;
use App\Models\Imagemenu;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data_slider    = Slider::all();
        $data_product   = Product::limit(4)->get();
        $data_about     = About::where('id',1)->first();
        $data_contact   = Profile::where('id',1)->first();
        $data_special   = SpecialOffer::where('id',1)->first();
        $data_invitation= Ajakan::where('id',1)->first();
        $menu_product   = Imagemenu::where('id',1)->first();
        $menu_contact   = Imagemenu::where('id',2)->first();
        $menu_profile   = Imagemenu::where('id',3)->first();
        return view('home.index',compact('data_slider','data_product','data_about','data_contact'
        ,'data_special','data_invitation','menu_product','menu_contact','menu_profile'));
    }
}
