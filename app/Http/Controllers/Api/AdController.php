<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdResource;
use App\Models\Ad;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class AdController extends Controller
{
    use ResponseTrait;

    public function filter(Request $request)
    {
        $results = Ad::filter($request->query,'tags')->get();
        return self::successResponse(data:AdResource::collection($results));
    }

}
