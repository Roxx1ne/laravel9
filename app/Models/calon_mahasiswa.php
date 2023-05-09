<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calon_mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'calon_mahasiswa';
    // protected $primaryKey = 'flight_id'; (berlaku untuk primary key selain id)
    // public $incrementing = false; (untuk tidak menggunakan auto increment pada primary key)

}
