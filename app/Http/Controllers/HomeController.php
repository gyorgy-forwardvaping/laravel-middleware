<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request) {
        //request session
        // $request->session()->put(['george' => 'student']);
        //global session
        // session(['dave' => 'instructor']);

        // echo session('george');
        // remove one
        // $request->session()->forget('george');


        //remove all
        // $request->session()->flush();
        // dd($request->session()->all());

        // $request->session()->flash('message', 'post created'); store for short period of time
        // $request->session()->reflash('message', 'post created'); store longer
        // $request->session()->keep('message'); store 
        return $request->session()->get('message');

        // return view('home');
    }
}
