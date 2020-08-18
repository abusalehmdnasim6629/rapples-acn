<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Hash;
use App\aboutAcn;
use App\AboutTeam;
use App\SolidCompany;
use App\SecondQuote;
use App\CommunitySupport;
use App\Slider;



use Session;

session_start();

class HomeController extends Controller
{
    
    public function index(){
      $about =  aboutAcn::first();
      $scompany =  SolidCompany::first();
      $aboutTeam =  AboutTeam::first();
      $SecondQuote =  SecondQuote::first();
      $CommunitySupport =  CommunitySupport::first();
      $slider =  Slider::all();
   





        
        return view('home_content')
               ->with('about',$about)
               ->with('scompany',$scompany)
               ->with('aboutTeam',$aboutTeam)
               ->with('SecondQuote',$SecondQuote)
               ->with('CommunitySupport',$CommunitySupport)
               ->with('slider',$slider);





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

    

    public function contact(){

        return view('contact');
    }

  

    public function shop(){

        return view('shop');
    }

    public function single_shop(){

        return view('single_shop');
    }

}
