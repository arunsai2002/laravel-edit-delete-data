<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\member;


class StudentController extends Controller
{
    //
    

    public function index(){
       
        
        
        $data = DB::table('crudtable')->get();
       

       
        return view('index',['list'=>$data]);
    }
    public function store(Request $request){
   

    // return $request->input();
    $request->validate([
        'email'=>'required',
        'password'=>'required',
    ]);

    $query = DB::table('crudtable')->insert([
        'email'=>$request->input('email'),
        'password'=>$request->input('password'),
    ]);

   

    
        
    }

   public function dboperations(){
        return DB::table('crudtable')->where('id',1)->update(['email'=>'arun2100@gmail.com']);
        // return DB::table('crudtable')->where('id',1)->delete();
    }

    
}
