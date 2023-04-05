<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class pm_orderResource extends JsonResource
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
            'order' => $this->order,
            'order_type' => $this->order_type,
            'descriptions' => $this->descriptions,
            'company_code' => $this->company_code,
            'plant' => $this->plant,
            'sales_doc' => $this->sales_doc,
            'system_status' => $this->system_status,
            'scheduled_start' => $this->scheduled_start,
            'actual_start' => $this->actual_start,
            'actual_finish' => $this->actual_finish,
            'release' => $this->release,
        ];
    }
}
