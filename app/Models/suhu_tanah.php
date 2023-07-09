<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suhu_tanah extends Model
{
    use HasFactory;

    protected $table = "suhu_tanah";
    protected $primaryKey = "id_suhu_tanah";
    protected $fillable = [
        'id_suhu_tanah', 'nilai_suhu_tanah', 'keterangan',
    ];

    public function datasensor(){
        return $this->hasMany(datasensor::class);
    }
}
