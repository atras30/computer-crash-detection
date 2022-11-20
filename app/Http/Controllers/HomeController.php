<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\DiseaseRelation;
use App\Models\Symptom;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user_page.dashboard', [
            'navbarBackgroundColor' => [253, 250, 233, 0.65],
        ]);
    }

    public function login()
    {
        return view('authentication_page.login', [
            'navbarBackgroundColor' => [114, 124, 136, 0.65],
            'navbarTextColor' => 'white',
        ]);
    }

    public function aboutUs()
    {
        return view('user_page.about_us', [
            'navbarBackgroundColor' => [255, 194, 171, 0.65],
        ]);
    }

    public function chooseSymptom(Request $request)
    {
        if ($request->has('checked_checkboxes')) {
            //get checked checkbox from user's input
            $checkedCheckboxes = json_decode($request->checked_checkboxes);

            //loop through disease
            foreach (Disease::all() as $eachDisease) {
                //each disease must be checked if the disease contains any checked checkbox (symptom)
                //if the disease has all of the checked symptom, then add the symptom into the $symptoms array
                if (
                    !array_diff(
                        $checkedCheckboxes,
                        $eachDisease->disease_relations
                            ->pluck('symptom_id')
                            ->toArray()
                    )
                ) {
                    $possibleDisease[] = $eachDisease;
                }
            }

            // after searching for all possible disease, then list which symptom should be shown to user for the next iteration.
            // get all symptoms from all possible disease
            $symptoms = [];
            foreach ($possibleDisease as $eachDisease) {
                foreach (
                    $eachDisease->disease_relations
                        ->pluck('symptom_id')
                        ->toArray()
                    as $symptomId
                ) {
                    if (
                        !in_array(
                            $symptomId,
                            collect($symptoms)
                                ->pluck('id')
                                ->toArray()
                        )
                    ) {
                        $symptom = Symptom::find($symptomId);
                        $symptoms[] = $symptom;
                    }
                }
            }

            foreach ($symptoms as $symptom) {
                $possibleDiseaseIds = DiseaseRelation::where(
                    'symptom_id',
                    $symptom->id
                )
                    ->get()
                    ->pluck('disease_id');
                $possibleDiseaseNames = [];
                foreach ($possibleDiseaseIds as $possibleDiseaseId) {
                    $possibleSymptomIds = DiseaseRelation::where(
                        'disease_id',
                        $possibleDiseaseId
                    )
                        ->get()
                        ->pluck('symptom_id');
                    if (
                        !array_diff(
                            $possibleSymptomIds->toArray(),
                            collect($symptoms)
                                ->pluck('id')
                                ->toArray()
                        )
                    ) {
                        $possibleDiseaseNames[] = Disease::find(
                            $possibleDiseaseId
                        )->body;
                        $symptom->possible_diseases = collect(
                            $possibleDiseaseNames
                        )->join(' | ');
                    }
                }
            }
        } else {
            //get all symptom if it is the first time user checked in to the application
            $symptoms = Symptom::all();
            $checkedCheckboxes = false;
        }

        return view('user_page.choose_symptom', [
            'navbarBackgroundColor' => [253, 250, 233, 0.6],
            'symptoms' => $symptoms,
            'checkedCheckboxes' => $checkedCheckboxes,
        ]);
    }

    public function result(Request $request)
    {
        $validated = $request->validate([
            "symptoms" => "string|required"
        ]);

        $validated['symptoms'] = json_decode($validated["symptoms"]);

        // dd($validated['symptoms']);

        $diseases = [];
        foreach($validated['symptoms'] as $symptom) {
            $diseases[] = Disease::where("body", $symptom)->get()->first();
        }

        return view('user_page.result', [
            "diseases" => $diseases,
            'navbarBackgroundColor' => [253, 250, 233, 0.6],
        ]);
    }
}
