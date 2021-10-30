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

    public function about () {
        $Testimonials = Testimonials::orderBy('id', 'desc')->get();
        $Team = Team::orderBy('id', 'desc')->get();
        $title = 'About Us';
        return view('about', [
            'title'         => $title,
            'testimonials'  => $Testimonials,
            'team'          => $Team,
        ]);
    }

}