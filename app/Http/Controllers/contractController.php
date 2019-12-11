<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contract;
class contractController extends Controller
{
    public function listContract(){
        $contract=contract::all(); 
        return view('listContract',compact('contract'));
    }
}
