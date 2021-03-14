<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index(){

        $fruits = array(
            0 => 'Apel',
            1 => 'Aku',
            2 => 'Asyiap',
            3 => 'Asyifa',
        );

        $name = array (
            0 => 'Eki'
        );
        return view('pages.home', compact('name', 'fruits'));
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
}
