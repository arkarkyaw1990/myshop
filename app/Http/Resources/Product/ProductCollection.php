<?php

namespace App\Http\Resources\Product;
use App\Http\Resources\Product\ProductphotoCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => '$'.$this->price,
            'images' => ProductphotoCollection::collection($this->images),
            'href' => [
                'link' => route('products.show', $this->slug)
            ]
        ];
    }
}
