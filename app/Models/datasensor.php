<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class datasensor extends Model
{
    use HasFactory;

    protected $table = "datasensor";
    protected $primaryKey = "id_data_sensor";
    protected $fillable = [
        'id_data_sensor', 'id_suhu_udara', 
        'id_suhu_tanah', 'id_ph',
        'id_kelembaban',
    ];

    public function allData(){
        return DB::table('datasensor')
            ->leftJoin('suhu_udara', 'suhu_udara.id_suhu_udara', '=', 'datasensor.id_suhu_udara')
            ->leftJoin('suhu_tanah', 'suhu_tanah.id_suhu_tanah', '=', 'datasensor.id_suhu_tanah')
            ->leftJoin('ph', 'ph.id_ph', '=', 'datasensor.id_ph')
            ->leftJoin('kelembaban', 'kelembaban.id_kelembaban', '=', 'datasensor.id_kelembaban')
            ->get();

    }

    public function suhu_udara(){
        return $this->belongsTo(suhu_udara::class);
    }

    public function suhu_tanah(){
        return $this->belongsTo(suhu_tanah::class);
    }

    public function ph(){
        return $this->belongsTo(ph::class);
    }

    public function kelembaban(){
        return $this->belongsTo(kelembaban::class);
    }

}
