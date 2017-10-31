<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCandidatesRequest;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Excel;

class CandidateController extends Controller
{
    public function insertCandidate(CreateCandidatesRequest $request)
    {
        $data = $request->validated();
        $data['hv'] = $request->hv->store('hv','public');
        Candidate::create($data);
        return back()->with('success', 1);
    }

    public function download()
    {
        $candidates = Candidate::all();
        Excel::create('Reporte usuarios', function($excel) use($candidates) {
            $excel->sheet('Excel sheet', function($sheet) use($candidates){
                $sheet->fromArray($candidates);
            });

        })->download('xls');
    }
}
