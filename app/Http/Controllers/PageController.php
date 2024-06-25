<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //
    public function app(){
        $user = Auth::user();
        $title='about';
        return view ('about',compact('user'))->with('title',$title);
    }
    // public function index(){
    //     return view ('layouts.index');
    // }


    public function services(){
        $user = Auth::user();

        $data=array(
            'tittle'=> 'services',
            'service'=> ['Web Designs','Programming ']
        );
       # return view('layouts.services')->($data);
       return view('/services',$data)->with('user',$user);
    }
    public function mydashboard(){
        $user_id=auth()->user()->id;

        $user=User::find($user_id);

        return view('mydashboard')->with('posts',$user->posts);


    }

}
