<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voyage;
use App\Flight;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function soggiorni(){

        $voyages = Voyage::paginate(10);

        return view('soggiorni',['voyages' => $voyages]);
    }

    public function voli(){

        $flights = Flight::paginate(10);

        return view('voli',['flights' => $flights]);

    }
}
