<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
         'name' => $this->name,
         'discount'=> $this->discount,
        'totalPrice'=> (1-(($this->discount)/100))*$this->price,
        'rating'=> $this->reviews->count() ? round($this->reviews->sum('star')/$this->reviews->count(),2): 'No rating yet',
        'href' => [
           'link' => route('products.show',$this->id)
        ]
        ];
    }
}
