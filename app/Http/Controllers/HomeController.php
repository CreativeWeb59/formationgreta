<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function dashboard()
    {
        //$status = "En cours";
        //$orders = Order::with('user')->finishAll()->orderBy('created_at', 'ASC')->where('status',$status)->get();
        //return view('auth.admin.adminDashboard', compact('orders','status'));
        return view('auth.admin.adminDashboard');
    }
}