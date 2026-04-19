<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Helpers\ApiResponse;
use App\Http\Resources\CityResource; 

class CityController extends Controller
{
     public function index()
    {
        $cities = City::all();

        if($cities)
            {
                return ApiResponse::sendResponse(200 , 'success request' , CityResource::collection($cities));
               // new SettingResource($cities));
            }
        
        
        else
            {
                return ApiResponse::sendResponse(404 , 'failed request' , []);
            }
        
    }
}
