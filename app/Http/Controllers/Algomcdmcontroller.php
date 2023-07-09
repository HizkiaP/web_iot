<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\datasensor;
use App\Models\sensordata;
use App\Models\suhu_udara;
use App\Models\suhu_tanah;
use App\Models\ph;
use App\Models\kelembaban;

class Algomcdmcontroller extends Controller
{

    // public function __construct()
    //  {
    //      $this->datasensor = new datasensor();
    //  }
     
    public function index(){
        $data = DB::table('sensordata')
        ->select('nilai_temp', 'nilai_suhu_tanah', 'nilai_ph', 'nilai_kelembaban')
        ->orderBy('id_sensor_data', 'desc')
        ->get();

        return $data;

        // $datasensor = new datasensor();
        // $data = [
        //     'datasensor' => $this->datasensor->allData(),
        //  ];

        // return $data;
    }

    public function calculateMcdm($data){
        $bobot1 = 0.2;
        $bobot2 = 0.25;
        $bobot3 = 0.3;
        $bobot4 = 0.25;
  
        $bobotresult = [];

        foreach ($data as $row) {
            // Mendapatkan nilai kriteria dari setiap kolom
            $krit1 = $row->nilai_temp;
            $krit2 = $row->nilai_suhu_tanah;
            $krit3 = $row->nilai_ph;
            $krit4 = $row->nilai_kelembaban;
            
            // Menetapkan nilai kriteria
        if ($krit1 >= 23 && $krit1 <= 30) {
            $krit1 = 5;

        }else{
            $bobot1 = 0;
        }

        if ($krit2 >= 23 && $krit2 <= 30) {
            $krit2 = 5;

        }else{
            $bobot2 = 0;
        }

        if ($krit3 >= 5.5 && $krit3 <= 7) {
            $krit3 = 5;

        }else{
            $bobot3 = 0;
        }

        if ($krit4 >= 50 && $krit4 <= 75) {
            $krit4 = 5;

        }else{
            $bobot4 = 0;
        }
            
            // Menghitung total bobot
            $totalbobot = ($krit1 * $bobot1) + ($krit2 * $bobot2) + ($krit3 * $bobot3) + ($krit4 * $bobot4);

            // Menyimpan hasil total bobot dalam struktur data
            $bobotresult[] = $totalbobot;
        }

        return $bobotresult;
        
    }

    public function calculateAverage($startTimestamp, $endTimestamp)
    {
        $filteredData = DB::table('sensordata')
            ->select('nilai_temp', 'nilai_suhu_tanah', 'nilai_ph', 'nilai_kelembaban')
            // ->whereBetween('created_at', [$startTimestamp, $endTimestamp])
            ->get();

        $averageValues = [];

        // dd($filteredData);
        //$startTimestamp = strtotime('2023-06-15 17:28:26');
        //dd($startTimestamp);

        if ($filteredData->count() > 0) {
            // Inisialisasi variabel penampung total nilai
            $totalTemp = 0;
            $totalSuhuTanah = 0;
            $totalPH = 0;
            $totalKelembaban = 0;

            foreach ($filteredData as $row) {
                $totalTemp += $row->nilai_temp;
                $totalSuhuTanah += $row->nilai_suhu_tanah;
                $totalPH += $row->nilai_ph;
                $totalKelembaban += $row->nilai_kelembaban;
            }

            // Menghitung rata-rata nilai
            $averageTemp = $totalTemp / $filteredData->count();
            $averageSuhuTanah = $totalSuhuTanah / $filteredData->count();
            $averagePH = $totalPH / $filteredData->count();
            $averageKelembaban = $totalKelembaban / $filteredData->count();

            // Menyimpan rata-rata nilai dalam array
            $averageValues = [
                'average_temp' => $averageTemp,
                'average_suhu_tanah' => $averageSuhuTanah,
                'average_ph' => $averagePH,
                'average_kelembaban' => $averageKelembaban,
            ];

            
        }
       
        return $averageValues;
    }


    public function showresults()
    {
        // Menentukan awal dan akhir timestamp
        $startTimestamp = strtotime('2023-06-15 17:28:26');
        $endTimestamp = strtotime('2023-06-15 17:29:15');

        // Mengambil data dari database
        $datafromdb = $this->index();

        // Menghitung Weighted Sum Model
        $results = $this->calculateMcdm($datafromdb);

        // Menghitung rata-rata nilai
        $averageValues = $this->calculateAverage($startTimestamp, $endTimestamp);

        return view('hasil')
            ->with('results', $results)
            ->with('averageValues', $averageValues);
    }
}
