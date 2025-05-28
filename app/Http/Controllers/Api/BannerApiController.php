<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerApiController extends Controller
{
    public function index(Request $request)
{
    return response()->json([
        'status' => true,
        'data' => Banner::all()
    ]);
}


}
