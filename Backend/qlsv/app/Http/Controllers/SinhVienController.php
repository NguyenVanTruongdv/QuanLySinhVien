<?php

namespace App\Http\Controllers;

use App\Models\SinhVien;
use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function getAll(){
        $svien = SinhVien::all();
        return $svien;
    }
}
