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
use App\Leader;

use Session;

session_start();
class LeaderController extends Controller
{
    public function leader(){
        $leader = Leader::all();
        return view('leader')->with('leader',$leader);
    }
}
