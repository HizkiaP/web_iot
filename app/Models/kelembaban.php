<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelembaban extends Model
{
    use HasFactory;

    protected $table = "kelembaban";
    protected $primaryKey = "id_kelembaban";
    protected $fillable = [
        'id_kelembaban', 'nilai_kelembaban', 'keterangan',
    ];

    public function datasensor(){
        return $this->hasMany(datasensor::class);
    }
}
