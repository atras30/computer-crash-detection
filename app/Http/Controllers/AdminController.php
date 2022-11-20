<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\DiseaseRelation;
use App\Models\Symptom;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view("admin.dashboard_admin",[
            "totalGejala" => Symptom::all()->count(),
            'totalDisease' => Disease::all()->count()
        ]);
    }

    public function dataGejala() {
        return view("admin.data_gejala",[
            'diseases' => Disease::all(),
            'symptoms' => Symptom::all()
        ]);
    }

    public function dataPenyakit() {
        return view("admin.data_penyakit", [
            'symptoms' => Symptom::all()
        ]);
    }

    public function dataRiwayat() {
        return view("admin.data_riwayat");
    }

    public function addDisease(Request $request) {
        $path = $request->file("image")->store("img/diseases");

        $disease = Disease::create([
            'body' => $request->body,
            "path" => $path
        ]);

        // dd($request->symptom_name);
        $symptomId = Symptom::where("body", $request->symptom_name)->get()->first()->id;

        DiseaseRelation::create([
            "disease_id" => $disease->id,
            "symptom_id" =>$symptomId
        ]);

        return redirect()->intended(route("admin.disease"));
    }

    public function deleteDisease(Request $request) {
        Symptom::find($request->id)->delete();

        return redirect()->intended(route("admin.disease"));
    }
}
