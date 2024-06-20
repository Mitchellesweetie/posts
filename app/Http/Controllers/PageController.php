<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function app(){
        $title='about';
        return view ('about')->with('title',$title);
    }
    public function index(){
        return view ('layouts.index');
    }

    public function main(){
        $title='Main';
        //doesnt want to work with variable

        return view('/main', compact('title'));
    }
    public function services(){
        $data=array(
            'tittle'=> 'services',
            'service'=> ['Web Designs','Programming ']
        );
       # return view('layouts.services')->($data);
       return view('/services',$data);
    }
  
}
