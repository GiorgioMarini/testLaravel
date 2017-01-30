<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view ('home');
    }
    public function about(){
        $data = [];
        $data = [
            'first' => 'Giorgio',
            'last'  => 'Marini'
        ];
        
        return view('about', $data);
    }

    public function contact()
    {
        return view('tickets.create');
    }
    
    
}
