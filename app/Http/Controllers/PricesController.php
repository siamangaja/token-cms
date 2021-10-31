<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;
use Session;
use Auth;
use App\Models\Prices;
use App\Models\Partners;

class PricesController extends Controller
{

    public function index () {
        $data = Prices::orderBy('id', 'desc')->get();
        if (!$data) {
            return response()->json([
                'status' => '404',
                'message' => 'Page not found',
            ]);
        }
        $Partners = Partners::orderBy('id', 'desc')->get();
        $title = 'Price';
        return view('price', [
            'title' => $title,
            'data' => $data,
            'partners' => $Partners,
        ]);
    }

}