<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizzas;

class PageController extends Controller{
    public function getHome() {
   		
   		$pizzas = Pizzas::all();
	   	
		return view('welcome', compact('pizzas'));	
	}
	
}
