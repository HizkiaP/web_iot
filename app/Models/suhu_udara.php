<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suhu_udara extends Model
{
    use HasFactory;

    protected $table = "suhu_udara";
    protected $primaryKey = "id_suhu_udara";
    protected $fillable = [
        'id_suhu_udara', 'nilai_temp', 'keterangan',
    ];

    public function datasensor(){
        return $this->hasMany(datasensor::class);
    }

    // public function suhu_udara(){
    //     return $this->load->model('suhu_udara');
    // }
}
