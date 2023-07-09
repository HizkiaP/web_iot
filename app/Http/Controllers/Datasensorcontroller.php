<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\sensordata;
use App\Models\datasensor;
use App\Models\suhu_udara;
use App\Models\suhu_tanah;
use App\Models\ph;
use App\Models\kelembaban;

class Datasensorcontroller extends Controller
{

    //  public function __construct()
    //  {
    //      $this->data_sensor = new data_sensor();
    //  }
   
    public function index()
    {
        //$data_sensor = sensordata::all();
        $sensordata = DB::table('sensordata')->orderBy("id_sensor_data", "desc")->get();
        return view('data-sensor', ['sensordata'=>$sensordata]);
 
    }

    public function delete($id_sensor_data){
        $sensor = sensordata::find($id_sensor_data);
        $sensor->delete();
        return redirect()->route('data-sensor')->with('success', 'Data Berhasil Di Hapus');
    }

    public function deleteAll(){
        DB::table('sensordata')->truncate();

        return redirect()->route('data-sensor')->with('success', 'Semua Data Berhasil Di Hapus');
    }

    // public function destroy($id_sensor_data)
    // {
    //     $sensor = sensordata::find($id_sensor_data);
    //     if ($sensor) {
    //         $sensor->delete();
    //         return redirect()->back()->with('success', 'Data berhasil dihapus.');
    //     }
    //     return redirect()->back()->with('error', 'Data tidak ditemukan.');
    // }

    // public function deleteAll()
    // {
    //     sensordata::truncate();

    //     return redirect()->back()->with('success', 'Data berhasil dihapus.');
    // }

    //  $data = [
        //     'datasensor' => $this->data_sensor->allData(),
        //  ];
        // return view('data-sensor', $data);

        //$data = datasensor::all();
        // $suhu_udara = DB::table('suhu_udara')->get();
        // $ph = DB::table('ph')->get();
        // return view('data-sensor', ['suhu_udara'=>$suhu_udara, 'ph'=>$ph]);

    //return view('data-sensor', compact('data'));

    /**
     * Show the form for creating a new resource.
     */
   
}
