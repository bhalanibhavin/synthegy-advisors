<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\helpers\helper as helper;

class HomeController extends Controller
{	
    public function __construct()
    {
    }

	public function home(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'Home - '.config('app.name');
            $metaDataDetail['description'] = 'Home - '.config('app.name');
            $metaDataDetail['keyword'] = 'Home - '.config('app.name');
            return view('front.home', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function aboutUs(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'About Us - '.config('app.name');
            $metaDataDetail['description'] = 'About Us - '.config('app.name');
            $metaDataDetail['keyword'] = 'About Us - '.config('app.name');
            return view('front.about-us', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function contactUs(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'Contact Us - '.config('app.name');
            $metaDataDetail['description'] = 'Contact Us - '.config('app.name');
            $metaDataDetail['keyword'] = 'Contact Us - '.config('app.name');
            return view('front.contact-us', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }
}