<?php

namespace App\Http\Controllers;

use App\Models\Technician;
use App\Models\User;
use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:technician-list', ['only' => ['index','show']]);  
    }


    public function index()
    {
        $technicians = Technician::all();
 
        return view('technician.index', compact('technicians'));
    }


}

