<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $trains = Train::all();
        $train = Train::whereDate('departure', Carbon::today())->get();
        // dd($train);
        return view('home', compact('trains','train'));
    }
}
