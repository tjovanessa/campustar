<?php

namespace App\Services\Impl;
use App\Http\Resources\CareerAptitudeTestQuestionResource;
use App\Models\CareerAptitudeTestQuestion;
use App\Services\CareerAptitudeTestQuestionService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CareerAptitudeTestQuestionServiceImpl implements CareerAptitudeTestQuestionService
{
    public function getTestQuestion() : AnonymousResourceCollection {
        $questions = CareerAptitudeTestQuestion::paginate(8);
        $perPage = $questions->perPage();
        $currentPage = $questions->currentPage();
        $startingNumber = ($currentPage - 1) * $perPage + 1;

        foreach ($questions as $index => $question) {
            $question->number = $startingNumber + $index;
        }

        return CareerAptitudeTestQuestionResource::collection($questions);
    }
}