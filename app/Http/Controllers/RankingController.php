<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RankingController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return View::make('pages.rank', compact('restaurants'));
    }
}
