<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Color;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $cars = Car::all();
        return view('home', compact('cars'));
    }

    public function section()
    {
        $cars = Car::all();
        $colors = Color::all();
        return view('pages.frontend.section.section', compact('colors', 'cars'));
    }
}
