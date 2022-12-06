<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id' => $this->id,  // conservem nom columna, conservem valor
            'nom' => $this->nom,  
            'descripcio' => $this->descripcio,
            'preu' => round($this->preu * 1.25,2), //'conservem nom columna, canviem els valors
            //'created_at' => '' ?? $this->created_at->format('d/m/Y'),
            //'updated_at' => $this->updated_at,

        ];
    }
}
