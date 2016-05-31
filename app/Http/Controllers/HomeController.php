<?php

namespace App\Http\Controllers;

use App\Adv;
use App\Http\Requests;

use Auth;
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
     * @return \Illuminate\Http\Response
     */




    public function index()
    {
        return view('home');
    }

    public function store(Requests\CreateAdv $request){

        if (Auth::check())
        {
            $req = $request->all();
            $req['uid']= Auth::user()->id;
            Adv::create($req);
        }

return redirect('/');
    }
}
