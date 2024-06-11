<?php

namespace XuongOop\Salessa\Controllers\Client;

use XuongOop\Salessa\Commons\Controller;
use XuongOop\Salessa\Models\Product;
use XuongOop\Salessa\Models\Category;


class ProductDetailsController extends Controller
{
    public function showDetail($id)
    {
        $productModel = new Product();

        // Lấy thông tin sản phẩm theo $id
        $product = $productModel->findByID($id);

        // Tạo một instance của model Category
        $categoryModel = new Category();

        // Lấy thông tin category của sản phẩm
        $category = $categoryModel->findByID($product['category_id']);

        // Lấy danh sách sản phẩm
        $productModel = new Product();
        $products = $productModel->all();

        $categories = $categoryModel->all();

        // Render view và truyền dữ liệu sản phẩm, danh mục và sản phẩm vào
        return $this->renderViewClient('productdetails', [
            'product' => $product,
            'category' => $category,
            'products' => $products // Truyền danh sách sản phẩm vào view
        ]);
    }
}
