<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\About;
use App\Models\Profile;
use App\Models\Specialoffer;
use App\Models\Slider;
use App\Models\Ajakan;
use App\Models\Imagemenu;
use App\Models\Service;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data_slider    = Slider::all();
        $data_product   = Product::orderBy('id', 'desc')->get();
        $data_about     = About::where('id',1)->first();
        $data_contact   = Profile::where('id',1)->first();
        $data_special   = Specialoffer::where('id',1)->first();
        $data_invitation= Ajakan::where('id',1)->first();
        $menu_product   = Imagemenu::where('id',1)->first();
        $menu_contact   = Imagemenu::where('id',2)->first();
        $menu_profile   = Imagemenu::where('id',3)->first();
        $service        = Service::limit(3)->get();
        // return view('home.index',compact('data_slider','data_product','data_about','data_contact'
        // ,'data_special','data_invitation','menu_product','menu_contact','menu_profile'));
        return view('new.landing',compact('data_slider','data_product','data_about','data_contact'
        ,'data_special','data_invitation','menu_product','menu_contact','menu_profile','service'));
    }
}
