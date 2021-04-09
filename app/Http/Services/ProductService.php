<?php


namespace App\Http\Services;


use App\Models\Product;

class ProductService extends BaseService
{
  protected $productRepo;
  public function __construct(ProductRepository $productRepo)
  {
      return $this->productRepo = $productRepo;
  }
  function getAll()
  {
      return $this->productRepo->getAll();
  }

  function getById($id)
  {
      return $this->getById($id);
  }

    function store($request)
    {
        $product = new Product();
        $product->fill($request->all());
        if ($request->hasFile('image')){
            $path = $this->updateLoadFile($request, 'image', 'product-image');

            $product->image = $path;
        }

        $this->productRepo->store($product);
    }
    function update($request, $id)
    {
        $product = $this->productRepo->findById($id);
        $product->fill($request->all());
        if ($request->hasFile('image')){
            $path = $this->updateLoadFile($request, 'image', 'product-image');

            $product->image = $path;
        }

        $this->productRepo->store($product);
    }
}
