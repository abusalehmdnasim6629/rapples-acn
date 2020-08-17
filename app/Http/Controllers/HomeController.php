<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){

        return view('home_content');
    }

    public function training(){

        return view('training');
    }

    public function zoom(){

        return view('zoom');
    }

    public function rd(){

        return view('rd');
    }

    
    public function recognition(){

        return view('recognition');
    }

    public function template(){

        return view('template');
    }
    public function meeting(){

        return view('meeting');
    }

    public function leader(){

        return view('leader');
    }

    public function about(){

        return view('about');
    }

    public function contact(){

        return view('contact');
    }

    public function gallery(){

        return view('gallery');
    }

    public function shop(){

        return view('shop');
    }

    public function single_shop(){

        return view('single_shop');
    }

}
