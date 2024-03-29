<?php

namespace App\Http\Resources\Pizza;

use Illuminate\Http\Resources\Json\JsonResource;

class PizzaResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'preview_image' => $this->imageUrl,
            'price' => $this->price,
            'old_price' => $this->old_price,
            'is_published' => $this->is_published,
        ];
    }
}
