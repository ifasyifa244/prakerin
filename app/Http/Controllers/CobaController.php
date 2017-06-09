<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coba;

class CobaController extends Controller
{
    //
    public function test(){
    	$a=Coba::all();
    	return $a;
    }

     public function test2($nama){
    	$b=Coba::where('nama','like',$nama)->orWhere ('jurusan','like',$nama)->get();
    	return $b;
    }

    public function index(){
    	$tampilan=Coba::all();
    	return view ('coba',compact('tampilan'));
    }

    public function test3(){
    	$buah=['Mangga','Jeruk','Apel','Anggur','Manggis'];
    	return view('buah',compact('buah'));
    }

    public function test4(){
    	$nama=['Adi ','tatang','jajang'];
    	return view('nama',compact('nama'));
    }

    public function binatang($id){
    	$data=['binatang'=>['Singa ','Kelinci','Ular','kuda','Harimau'], 
    			'kendaraan'=>['Mobil ','Motor','Bemo','Truk','Sepeda'],
    			'laptop'=>['Asus ','Lenovo','Hp','Axioo','Samsung']];
    	$haha=$data [$id];
    	
    	return view('binatang',compact('haha'));
    }



    


    
}
