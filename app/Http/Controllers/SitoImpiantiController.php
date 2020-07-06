<?php

namespace App\Http\Controllers;

use App\Implant;
use App\Category;
use App\Province;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitoImpiantiController extends Controller
{
    public function index(){

        $impianti=Implant::where('pubblicato','on')->get();
        $page_title = 'Parco Impianti';
        $page_description = '';



        $categories = Category::with('children')->whereNull('parent_id')->where('pubblicato','on')->get();
        $citta=Province::all();
        $services=Service::all()->where('pubblicato','on');
        // dd($citta);
        return view('website.impianti.index',compact('impianti','categories','citta','services','page_title','page_description'));
    }
}
