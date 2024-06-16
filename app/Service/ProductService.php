<?php

namespace App\Service;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    public function store($data)
    {
        $data['image'] = Storage::disk('public')->put('/images', $data['image'],);
        $imageName = explode('/', $data['image']);
        $data['image'] = $imageName[1];
        Product::firstOrCreate($data);
    }

    public function update($data, $product)
    {
        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
            $imageName = explode('/', $data['image']);
            $data['image'] = $imageName[1];
        }
        $product->update($data);
    }
}
