<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

    function index()
    {
        $projects = Project::all();
        $orders = Auth::check() ? Order::where('user_id', Auth::id())->get() : collect();
        return view('index', [
            'projects' => $projects,
            'orders' => $orders,
        ]);
    }


}
