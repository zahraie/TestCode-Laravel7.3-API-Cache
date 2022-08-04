<?php

namespace App\Http\Controllers;

use App\User;
use App\Repository\City;
// use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $cities = City::orderBy('ID')->get();
        // var_dump($cities);

        City::all('ID');
        return view('welcome');
    }

    public function rel($id = 1)
    {
        $user = User::find($id);

        $result = $user->skills;
        dd($result[0]->user);

        dd($result);
    }
}
