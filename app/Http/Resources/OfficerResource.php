<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OfficerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'company_id' =>$this->company_id,
            'officer_id' =>$this->officer_id,
            'officer_name' =>$this->officer_name,
            'officer_qr' =>$this->officer_qr,
            'level' =>$this->level,
            'division' =>$this->division,
            'birth_date' =>$this->birth_date,
            'birth_place' =>$this->birth_place,
            'placement_location' =>$this->placement_location,
            'pin' =>$this->pin,
        ];
    }
}
