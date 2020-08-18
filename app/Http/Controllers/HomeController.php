<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Description of index
     *
     * @return void
     */
    public function index() {
        $routes = Route::getRoutes();
        $apiRoutes = array();

        foreach ($routes as $route) {
            if (substr($route->getName(),0,"4") === "api.") {
                $apiRoutes[$route->uri.":".$route->methods[0]] = $route;
            }
        }

        krsort($apiRoutes);

        return view('welcome', ['routes' => $apiRoutes]);
    }
}
