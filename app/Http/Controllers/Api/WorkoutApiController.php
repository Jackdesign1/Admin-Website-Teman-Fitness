<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Workout;

class WorkoutApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => true,
            'data' => Workout::all()
        ]);
    }
}
