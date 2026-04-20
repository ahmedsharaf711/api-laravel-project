<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\District;
use App\Helpers\ApiResponse;
use App\Http\Resources\DistrictResource; 

class DistrictController extends Controller
{
      public function index(Request $request)
    {
        $districts = District::where('city_id', $request->city_id)->get();

        if(count($districts) > 0)
            {
                return ApiResponse::sendResponse(200 , 'success request' , DistrictResource::collection($districts));
               // new SettingResource($cities));
            }
        
        
        else
            {
                return ApiResponse::sendResponse(404 , 'failed request' , []);
            }
        
    }
}
