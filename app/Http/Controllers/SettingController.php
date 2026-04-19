<?php

namespace App\Http\Controllers;

use App\Http\Resources\SettingResource; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Helpers\ApiResponse;
class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();

        if($settings)
            {
                return ApiResponse::sendResponse(200 , 'success request' , SettingResource::collection($settings));
               // new SettingResource($settings));
            }
        
        
      else
            {
                return ApiResponse::sendResponse(404 , 'failed request' , []);
            }
        
    }
}
