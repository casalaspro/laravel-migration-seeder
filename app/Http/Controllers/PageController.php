<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Carbon\Carbon;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
            $currentDay = Carbon::today()->toDateString();

            $trains = Train::all()
            ->where('departure_day', '=', $currentDay );
      
            return view('index', compact('trains') );
            // compact('trains')
        
    }
    
}
