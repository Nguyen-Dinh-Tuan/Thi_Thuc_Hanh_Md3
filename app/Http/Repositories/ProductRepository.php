<?php


namespace App\Http\Repositories;


use App\Models\Product;

class ProductRepository extends Repository
{

    function getAll()
    {
        return Product::orderBy('id', 'DESC')->paginate(3);
    }
    function findById($id)
    {
        return Product::findOrFail($id);
    }

    function store($product)
    {
        $product->save();


    }
    function delete($product)
    {
        $product->delete();


    }


}
