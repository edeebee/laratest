<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adv;
use App\Http\Requests;

class WelcomeController extends Controller
{

    public function welcome($id=null){
         if($id!=''){
             $data = Adv::latest()->where('uid','=',$id)->with('username')->get()->toArray();
         }
        else {
            $data = Adv::latest()->with('username')->get()->toArray();
        }


        return view('welcome',['data'=>$data]);
    }

}
