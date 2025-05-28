<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mentor;

class MentorApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => true,
            'data' => Mentor::all()
        ]);
    }
}
