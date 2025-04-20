<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

    public function testimonials(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'Testimonials - '.config('app.name');
            $metaDataDetail['description'] = 'Testimonials - '.config('app.name');
            $metaDataDetail['keyword'] = 'Testimonials - '.config('app.name');
            return view('front.testimonials', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function accounting(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'Accounting - '.config('app.name');
            $metaDataDetail['description'] = 'Accounting - '.config('app.name');
            $metaDataDetail['keyword'] = 'Accounting - '.config('app.name');
            return view('front.sub-pages.accounting', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function itrFiling(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'ITR Filing - '.config('app.name');
            $metaDataDetail['description'] = 'ITR Filing - '.config('app.name');
            $metaDataDetail['keyword'] = 'ITR Filing - '.config('app.name');
            return view('front.sub-pages.itr-filing', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function tdsTcsReturn(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'TDS & TCS Return - '.config('app.name');
            $metaDataDetail['description'] = 'TDS & TCS Return - '.config('app.name');
            $metaDataDetail['keyword'] = 'TDS & TCS Return - '.config('app.name');
            return view('front.sub-pages.tds-tcs-return', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function iecRegistration(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'IEC Registration - '.config('app.name');
            $metaDataDetail['description'] = 'IEC Registration - '.config('app.name');
            $metaDataDetail['keyword'] = 'IEC Registration - '.config('app.name');
            return view('front.sub-pages.iec-registration', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function esicRegistration(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'ESIC Registration - '.config('app.name');
            $metaDataDetail['description'] = 'ESIC Registration - '.config('app.name');
            $metaDataDetail['keyword'] = 'ESIC Registration - '.config('app.name');
            return view('front.sub-pages.esic-registration', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function epfRegistration(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'EPF Registration - '.config('app.name');
            $metaDataDetail['description'] = 'EPF Registration - '.config('app.name');
            $metaDataDetail['keyword'] = 'EPF Registration - '.config('app.name');
            return view('front.sub-pages.epf-registration', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function msmeRegistration(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'MSME Registration - '.config('app.name');
            $metaDataDetail['description'] = 'MSME Registration - '.config('app.name');
            $metaDataDetail['keyword'] = 'MSME Registration - '.config('app.name');
            return view('front.sub-pages.msme-registration', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function gstRegistration(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'GST Registration - '.config('app.name');
            $metaDataDetail['description'] = 'GST Registration - '.config('app.name');
            $metaDataDetail['keyword'] = 'GST Registration - '.config('app.name');
            return view('front.sub-pages.gst-registration', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function payrollManagement(Request $request)
    {
        try{
            $metaDataDetail['title'] = 'Payroll Management - '.config('app.name');
            $metaDataDetail['description'] = 'Payroll Management - '.config('app.name');
            $metaDataDetail['keyword'] = 'Payroll Management - '.config('app.name');
            return view('front.sub-pages.payroll-management', compact('metaDataDetail'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Server error');
        }
    }

    public function sendEnquery(Request $request)
    {
        $data = $request->all();
        try{
            $subject = "Enquiry from {$data['enquiry_name']}: {$data['enquiry_service_type']}";
            Mail::send('emails.enquiry', ['data' => $data], function ($message) use($subject) {
                $message->to(config('app.enquiry_mail'), config('app.name'))->subject($subject)->from(config('mail.from.address'), config('mail.from.name'));
            });
            return response()->json(['success' => 'Email sent successfully!']);
        } catch (\Exception $e) {
            return response()->json(['success' => 'Oops! Something went wrong. Please try again in a little while.']);
        }
    }

    public function sendContactUs(Request $request)
    {
        $data = $request->all();
        // try{
            $subject = "Contact-us from {$data['contact_us_name']}: {$data['contact_us_service_type']}";
            Mail::send('emails.contact-us', ['data' => $data], function ($message) use($subject) {
                $message->to(config('app.enquiry_mail'), config('app.name'))->subject($subject)->from(config('mail.from.address'), config('mail.from.name'));
            });
            return response()->json(['success' => 'Email sent successfully!']);
        // } catch (\Exception $e) {
        //     return response()->json(['success' => 'Oops! Something went wrong. Please try again in a little while.']);
        // }
    }
}