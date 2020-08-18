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
use App\Contact;




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

    public function message(Request $request){
       $contact = array();
       $contact['name'] = $request->name;
       $contact['email'] = $request->email;
       $contact['ibo_no'] = $request->ibo;
       $contact['up_line_tc'] = $request->tc;
       $contact['subject'] = $request->subject;
       $contact['message'] = $request->message;
    
       $insert = Contact::insert($contact);
       if($insert){
               
     
           toastr()->success('Message has been sent successfully!', 'Success', ['timeOut' => 3000]);
           return Redirect()->back();
       }else{
        toastr()->success('Message has not been sent', 'Error', ['timeOut' => 3000]);

        return Redirect()->back();
       }


    }
}
