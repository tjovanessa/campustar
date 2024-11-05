<?php

namespace App\Http\Controllers;

use App\Models\CareerAptitudeTestQuestion;
use App\Services\CareerAptitudeTestQuestionService;
use Illuminate\Http\Request;

class CareerAptitudeTestQuestionController extends Controller
{
    public function __construct(
        private CareerAptitudeTestQuestionService $careerAptitudeTestQuestionService
    ){
    }

    public function index(){
        $questions = CareerAptitudeTestQuestion::all();
        foreach ($questions as $index => $question) {
            $question->number = 1 + $index;
        }
        return view('test.career-aptitude-test', ["questions" => $questions]);
    }
}
