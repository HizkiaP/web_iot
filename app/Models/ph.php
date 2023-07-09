<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ph extends Model
{
    use HasFactory;

    protected $table = "ph";
    protected $primaryKey = "id_ph";
    protected $fillable = [
        'id_ph', 'nilai_ph', 'keterangan',
    ];

    public function datasensor(){
        return $this->hasMany(datasensor::class);
    }
}
