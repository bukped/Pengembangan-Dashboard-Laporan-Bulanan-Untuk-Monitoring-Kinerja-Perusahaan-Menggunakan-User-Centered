<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class resume_financial_statementResource extends JsonResource
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
            "tahun" => $this->tahun,
            "bulan" => $this->bulan,
            "code_item" => $this->code_item,
            "text_item" => $this->text_item,
            "nilai" => $this->nilai
        ];
    }
}
