<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('user.about');
    }
    public function benefits()
    {
        return view('user.benefits');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function login()
    {
        return view('user.login');
    }
    public function registration()
    {
        return view('user.registration');
    }
    public function services()
    {
        return view('user.services');
    }
}
