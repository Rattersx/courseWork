<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     return $this->middleware([Authenticate::class, IsAdmin::class])->except(['index']);
    // }

    public function index()
    {
        return view('home.index');
    }
}
