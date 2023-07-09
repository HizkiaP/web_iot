<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensordata extends Model
{
    use HasFactory;

    protected $table = "sensordata";
    protected $primaryKey = "id_sensor_data";
    protected $fillable = [
        'id_sensor_data', 'nilai_temp', 
        'nilai_suhu_tanah', 'nilai ph',
        'nilai_kelembaban',
    ];
}
