<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
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
            'id' => $this->id,
            'date' => $this->date,
            'status' => $this->validation,
            'site' =>  new SiteResource($this->site),
            'debris' => new DebrisResource($this->debris),
            'taxas' =>  TaxaResource::collection($this->taxas),
            'created_at' => $this->created_at,
        ];
    }
}
