<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;
use Session;
use Auth;
use App\Models\Pages;
use App\Models\Testimonials;
use App\Models\Team;
use App\Models\Partners;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

    public function details (Request $request) {
        $data = Pages::where('slug', $request->slug)->first();

        if (!$data) {
            return response()->json([
                'status' => '404',
                'message' => 'Page not found',
            ]);
        }

        $title = $data->title;
        return view('single-page', [
            'title' => $title,
            'data'  => $data->content,
        ]);
    }

    public function contact () {
        $data = Pages::where('slug', 'contact')->first();

        if (!$data) {
            return response()->json([
                'status' => '404',
                'message' => 'Page not found',
            ]);
        }
        $title = 'Contact Us';
        return view('contact', [
            'title' => $title,
            'content' => $data->content,
        ]);
    }

    public function submitContact (Request $request) {
        $datanotif = [
            'name'      => $request->name,
            'email'     => $request->email,
            'msg'       => $request->message,
            'subject'   => 'Form kontak website dari: '.$request->name
        ];
        $SentMail = Mail::send('email-contact', $datanotif, function($message) use ($datanotif)
        {
            $message->to(opsi('email'));
            $message->subject($datanotif['subject']);
        });
        return redirect ('contact')->with("success","Form submitted successfully...");
    }

    public function about () {
        $Testimonials = Testimonials::orderBy('id', 'desc')->get();
        $Team = Team::orderBy('id', 'desc')->get();
        $Partners = Partners::orderBy('id', 'desc')->get();
        $Title = 'About Us';
        return view('about', [
            'title'         => $Title,
            'testimonials'  => $Testimonials,
            'team'          => $Team,
            'partners'      => $Partners,
        ]);
    }

}