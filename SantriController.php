<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function dataSantri(){
      $mhs1 = 'Nabiel'; $asal1 = 'Dumai';
      $mhs2 = 'Ucok'; $asal2 = 'Pekanbaru';
      $mhs3 = 'Fulan'; $asal3 = 'Barzah';
      $mhs4 = 'Andi'; $asal4 = 'Jepang';
      $mhs5 = 'Budi'; $asal5 = 'Prindapan';




      return view('data_santri',
        compact('mhs1','mhs2','mhs3','mhs4','mhs5','asal1','asal2','asal3','asal4','asal5')
      
      );



    }
}
