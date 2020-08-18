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
use App\Vision;
use App\WinTeam;
use App\ProvenSystem;
use App\CommunitySupport;
use App\Hunger;
use App\Gallery;




use Session;

session_start();

class AboutController extends Controller
{
    public function about(){
        $Vision = Vision::first();
        $WinTeam = WinTeam::first();
        $ProvenSystem = ProvenSystem::first();
        $CommunitySupport =  CommunitySupport::first();
        $Hunger =  Hunger::first();


        return view('about')
               ->with('Vision',$Vision)
               ->with('WinTeam',$WinTeam)
               ->with('ProvenSystem',$ProvenSystem)
               ->with('CommunitySupport',$CommunitySupport)
               ->with('Hunger',$Hunger);




    }

    public function gallery(){
        $Gallery =  Gallery::all();
        return view('gallery')->with('Gallery',$Gallery);
    }
}
