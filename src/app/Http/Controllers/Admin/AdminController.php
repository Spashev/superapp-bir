<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\User;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $clientsCount = User::all()->count();
        $productsCount = Product::all()->count();

        return view('admin.welcome', [
            'clientsCount' => $clientsCount,
            'productsCount' => $productsCount
        ]);
    }

}
