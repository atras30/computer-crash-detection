<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view("admin.dashboard_admin");
    }

    public function dataGejala() {
        return view("admin.data_gejala");
    }

    public function dataPenyakit() {
        return view("admin.data_penyakit");
    }

    public function dataRiwayat() {
        return view("admin.data_riwayat");
    }
}
