<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        // Mostra solo i treni in partenza da "adesso" in poi
        $now = Carbon::now();

        $trains = Train::where('orario_partenza', '>=', $now)
            ->orderBy('orario_partenza') // tabellone ordinato per orario
            ->get();

        return view('index', compact('trains'));
    }
}
