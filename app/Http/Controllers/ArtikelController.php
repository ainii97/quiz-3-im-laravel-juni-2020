<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Artikel;

class ArtikelController extends Controller
{
        public function index(){
        $artikels=Artikel::all();
           return view('index',compact('artikels'));
       }
   
       public function back(){
        return redirect ('/');
       }
       
       public function create(){
        return view('create');
       }
   
       public function insert(Request $request){
           $artikels=new Artikel();
           $artikels->id=$request->get('id');
           $artikels->judul=$request->get('judul');
           $artikels->isi=$request->get('isi');
           $artikels->slug=$request->get('slug');
           $artikels->tag=$request->get('tag');
           $artikels->save();
        return redirect ('/');
       }
   
       public function read($id){
        $artikels=Artikel::find($id);
        return view('read',compact('artikels'));
       }
}
