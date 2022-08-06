<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Famille;
class FamilleController extends Controller
{
     public function index(){
       $listfamille = Famille::all();
       echo $listfamille ;
       return view('add', ['familles' => $listfamille]);
    }
     public function create(){

       return view ('add');
      

    }


    public function store(Request $request){
       $famille = new Famille() ;
       $famille->nom = $request->input('nom');
       $famille->save();
        
       return redirect('add');
    }
    }

