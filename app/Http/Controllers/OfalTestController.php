<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfalTestController extends Controller
{
    
    function index(){
        return view('welcome')->with("data",[]);
    }
    function nominal(Request $request){
        $nominal=$request->inputnominal;
        $mataUang=array(100000,50000,20000,10000,5000,2000,1000,500,100);
        $has=array();
        $i=0;
        foreach($mataUang as $single){
          if($nominal >= $single){
            $div =floor((int)$nominal / (int) $single);
            $sisa=(int)$nominal % (int) $single;
            $nominal=$sisa;
            $hash[$i]=array("key"=>$div,"mata"=>$single);
            $i++;
          }
        }
      
        return view('welcome')->with("data",$hash);
    }
   
}
