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
use App\Models\Prices;
use App\Models\Services;
use App\Models\Headline;
use App\Models\ServerStatus;
use App\Models\Currencies;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

    public function frontpage () {
        $Services = Services::orderBy('id', 'desc')->get();
        $Prices = Prices::orderBy('id', 'desc')->get();
        $Testimonials = Testimonials::orderBy('id', 'desc')->get();
        $Partners = Partners::orderBy('id', 'desc')->get();
        $hService = Headline::where('key','services')->first();
        $hPrice = Headline::where('key','price')->first();
        $Serverstatus = ServerStatus::orderBy('id', 'asc')->get();
        $hCurrencies = Headline::where('key','currencies')->first();
        $Currencies = Currencies::orderBy('id', 'asc')->get();
        $hHomepage = Headline::where('key','homepage')->first();
        return view('frontpage', [
            'title'         => 'Home',
            'Services'      => $Services,
            'Testimonials'  => $Testimonials,
            'Prices'        => $Prices,
            'Partners'      => $Partners,
            'hService'      => $hService,
            'hPrice'        => $hPrice,
            'Serverstatus'  => $Serverstatus,
            'hCurrencies'   => $hCurrencies,
            'Currencies'    => $Currencies,
            'hHomepage'     => $hHomepage,
        ]);
    }

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

    public function about () {
        $Title = 'About Us';
        $Testimonials = Testimonials::orderBy('id', 'desc')->get();
        $Team = Team::orderBy('id', 'desc')->get();
        $Partners = Partners::orderBy('id', 'desc')->get();
        $hTeam = Headline::where('key','team')->first();
        return view('about', [
            'title'         => $Title,
            'testimonials'  => $Testimonials,
            'team'          => $Team,
            'partners'      => $Partners,
            'hTeam'         => $hTeam,
        ]);
    }

}