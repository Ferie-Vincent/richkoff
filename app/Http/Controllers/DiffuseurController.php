<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiffuseurController extends Controller
{
    public function index(){
        return view("diffuseur.index");
    }

    public function maison(){
        return view("diffuseur.maison");
    }

    public function commerce(){
        return view("diffuseur.commerce");
    }

    public function faq(){
        return view("diffuseur.faq");
    }

    public function qrbox(){
        return view("diffuseur.qrbox");
    }

    public function qrart(){
        return view("diffuseur.qrart");
    }

    public function pro(){
        return view("diffuseur.pro");
    }

    public function slim(){
        return view("diffuseur.slim");
    }

    public function spray(){
        return view("diffuseur.spray");
    }
}
