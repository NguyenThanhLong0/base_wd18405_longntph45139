<?php

namespace XuongOop\Salessa\Controllers\Client;

use XuongOop\Salessa\Commons\Controller;
use XuongOop\Salessa\Models\Product;

class ProductDetailsController extends Controller
{
    public function show($id)
    {
        $productModel = new Product();
        $product = $productModel->findByID($id);

        // if (!$product) {
        //     // Handle the case where the product is not found
        //     return $this->renderViewClient('product_not_found');
        // }

        return $this->renderViewClient('product_details', [
            'product' => $product
        ]);
        
    }
}
