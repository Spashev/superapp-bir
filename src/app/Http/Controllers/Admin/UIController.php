<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class UIController extends Controller
{
    public function undraw()
    {
        return view('ui.undraw');
    }

    public function fontawesome()
    {
        return view('ui.fontawesome');
    }

    public function lineawesome()
    {
        return view('ui.lineawesome');
    }

    public function themify()
    {
        return view('ui.themify');
    }

    public function linearicons()
    {
        return view('ui.linearicons');
    }

    public function weatherIcons()
    {
        return view('ui.amcharts_weather_icons');
    }
}
