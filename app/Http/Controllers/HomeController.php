<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vehicle = Vehicle::orderBy('created_at', 'desc')->paginate(3);
        return view('home', compact('vehicle'));  
    }
}

