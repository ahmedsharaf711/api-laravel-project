<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\District;
use App\Helpers\ApiResponse;
use App\Http\Resources\CityResource; 
class DistrictResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
             "id" => $this->id,
            "name" => $this->name,
            "city_id" => $this->city->id,
            "city_name" => new CityResource($this->city)
            //$this->city->name

        ];
    }
}
