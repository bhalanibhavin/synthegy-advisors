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
            $metaDataDetail['title'] = 'Home';
            $metaDataDetail['description'] = 'Home';
            $metaDataDetail['keyword'] = 'Home';
            return view('front.home', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function aboutUs(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'About Us';
            $metaDataDetail['description'] = 'About Us';
            $metaDataDetail['keyword'] = 'About Us';
            return view('front.about-us', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function contactUs(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'Contact Us';
            $metaDataDetail['description'] = 'Contact Us';
            $metaDataDetail['keyword'] = 'Contact Us';
            return view('front.contact-us', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }
}