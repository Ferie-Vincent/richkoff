<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParfumController extends Controller
{
    protected $style;
    protected $bg;

    public function __construct()
    {
        $this->bg = "";
        $this->updateStyle(); 
    }

    protected function updateStyle()
    {
        $this->style = $this->bg === "dark"
            ? 'style="background-color: rgba(0, 0, 0, 0.476); backdrop-filter: blur(10px); padding: 20px;"'
            : '';
    }

    public function index() {
        return view("parfum.index", ['bg' => $this->bg, 'style' => $this->style]);
    }

    public function confusion() {
        $this->bg = "dark"; 
        $this->updateStyle();
        return view("parfum.confusion", ['bg' => $this->bg, 'style' => $this->style]);
    }

    public function ceintureNoire(){
        return view('parfum.ceinture-noire', ['bg' => $this->bg, 'style' => $this->style]);
    }

    public function exode(){
        $this->bg = "dark"; 
        $this->updateStyle();
        return view('parfum.exode', ['bg' => $this->bg, 'style' => $this->style]);
    }

    public function makeda(){
        $this->bg = "dark"; 
        $this->updateStyle();
        return view('parfum.makeda', ['bg' => $this->bg, 'style' => $this->style]);
    }

    public function santal(){
        $this->bg = "dark"; 
        $this->updateStyle();
        return view('parfum.santal', ['bg' => $this->bg, 'style' => $this->style]);
    }

    public function voyage(){
        return view('parfum.voyage', ['bg' => $this->bg, 'style' => $this->style]);
    }
}