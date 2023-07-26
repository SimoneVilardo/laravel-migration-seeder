<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Trains;

class TrainsController extends Controller
{
    public function index(){
        $trains = Trains::all();

        return view('home', compact('trains'));
    }
}
