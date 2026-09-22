<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fitness;

class FitnessController extends Controller
{
    public function index(){
    $fitness = Fitness::all();
       return view('fitness', compact('fitness'));

    }
}
