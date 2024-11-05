<?php

namespace App\Services;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

interface CareerAptitudeTestQuestionService {
    public function getTestQuestion() : AnonymousResourceCollection;
}