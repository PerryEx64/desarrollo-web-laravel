<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RegionesDistritosCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'lider_region' => $this->lider_region,
            'lider_distrito' => $this->lider_distrito,
            'regiones' => $this->regiones,
            'distritos' => $this->distritos,
        ];
    }
}
