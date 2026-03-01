<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
     protected $table ='sinhvien';

    protected $fillable = ['ten', 'mssv', 'lop'];

    public $timestamps = false;
}
