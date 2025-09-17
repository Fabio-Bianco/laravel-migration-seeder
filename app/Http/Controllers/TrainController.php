<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use illuminate\Http\Request;



class TrainController extends Controller
{
    public function index(){

        $today = Carbon::now()->format('Y-m-d');

        $trains = Train::where('orario_partenza', '>=', $today)->get();

        dd($trains); // <-- Debug qui
        return view('index', compact('trains'));


    }
}
