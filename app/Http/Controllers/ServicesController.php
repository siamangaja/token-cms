<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;
use Session;
use Auth;
use App\Models\Services;

class ServicesController extends Controller
{

    public function index() {
        $data = Services::orderBy('id', 'desc')->paginate(12);
        if (!$data) {
            return response()->json([
                'status' => '404',
                'message' => 'Page not found',
            ]);
        }
        $title = 'Services';
        return view('services', [
            'title' => $title,
            'data' => $data,
        ]);
    }

}