<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrakerinController extends Controller
{
    //
    

    public function percobaan(){
    	$a=2;
    	$b=2;
    	return view ('index', compact('a','b'));

    }

    public function percobaan2(){
    	$aa="Syifa Fauziah ";
    	$bb="cucu cahyati";
    	$cc="Agung maulana";
    	$dd="Ahmad Janjan";
    	$ee="yuli";
    	return view ('percobaan3', compact('aa','bb','cc','dd','ee'));

    }

    public function percobaan3(){
    	$f="Jajang nurjaman ";
    	$g="Sarrah ";
    	$h="Lia";
    	$i="lala";
    	$j="sasa";
    	return view ('percobaan2', compact('f','g','h','i','j'));

    }

    public function percobaan4(){
    	$k="yana ";
    	$kk=" cahyati";
    	$l=" maulana";
    	$m="Ahmad ";
    	$n="sarrah";
    	return view ('perobaan3', compact('k','kk','l','m','n'));

    }

    public function percobaan5(){
    	$o=" Fauzi ";
    	$p="yati";
    	$q="lana";
    	$r="sulis";
    	$s="yuliansyah";
    	return view ('percobaan5', compact('o','p','q','r','s'));

    }

    public function percobaan6(){
    	$t="wulan ";
    	$u="cahya";
    	$v=" maul";
    	$w="susi";
    	$x="yuli";
    	return view ('percobaan6', compact('t','u','v','w','x'));

    }

    public function param ($id){
    	return view ('welcome');
    }

     public function parameter ($a){
    	return view ('welcome2', compact('a'));
    }
}
