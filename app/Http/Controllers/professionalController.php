<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\professional;



class professionalController extends Controller
{
    public function listProfessional(){
        $professional=professional::all(); 
        return view('listProfessional',compact('professional'));
    }
}

