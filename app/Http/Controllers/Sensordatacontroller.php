<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\datasensor;
use App\Models\suhu_udara;
use App\Models\suhu_tanah;
use App\Models\ph;
use App\Models\kelembaban;

class Sensordatacontroller extends Controller
{
    public function __construct()
     {
         $this->datasensor = new datasensor();
     }

     public function index(){
        $datasensor = datasensor::all();
        $data = [
            'datasensor' => $this->datasensor->allData(),
         ];
        return view('hasil', $data);
     }

}
