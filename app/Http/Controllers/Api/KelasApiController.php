<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kelas;

class KelasApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => true,
            'data' => Kelas::with('mentor')->get()
        ]);
    }
}
