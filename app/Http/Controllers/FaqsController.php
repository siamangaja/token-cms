<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;
use Session;
use Auth;
use App\Models\Faqs;

class FaqsController extends Controller
{
    public function __construct()
    {
    }

    public function index() {
        $title = 'FAQ';
        $data = Faqs::orderBy('id', 'desc')->get();

        if (!$data) {
            return response()->json([
                'status' => '404',
                'message' => 'Page not found',
            ]);
        }

        return view('faq', [
            'title' => $title,
            'data'  => $data,
        ]);
    }

}