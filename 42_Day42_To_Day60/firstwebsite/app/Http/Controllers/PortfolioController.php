<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }

    public function about() {
        return view('portfolio.about');
    }

    public function projects() {
        return view('portfolio.projects');
    }

    public function contact() {
        return view('portfolio.contact');
    }
}
