<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\Major;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Pencarian pada dua kolom: jurusan dan perguruan tinggi
        $majorResults = Major::where('name', 'LIKE', "%{$query}%")->get();
        $universityResults = Campus::where('name', 'LIKE', "%{$query}%")->get();

        // Gabungkan hasil pencarian
        $results = $majorResults->merge($universityResults);

        return view('search.results', compact('results'));
    }
}
