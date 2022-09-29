<?php

namespace App\Http\Controllers;

use App\Models\PreiousSeaLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreiousSeaLevelController extends Controller
{
    //
   public function index(){
    $data['year'] = PreiousSeaLevel::select('year')->get();
    $data['sea_level'] = PreiousSeaLevel::select('sea_level')->get();
    $year = $data['year'];
    $sea_level = $data['sea_level'];


    // return $data;
    // return $year;
    return view('site.index',compact('year','sea_level')) ;
    }
}
