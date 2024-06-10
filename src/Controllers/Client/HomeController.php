<?php

namespace XuongOop\Salessa\Controllers\client;

use XuongOop\Salessa\Commons\Controller;
use XuongOop\Salessa\Models\Category;
use XuongOop\Salessa\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categoryModel = new Category();
        $categories = $categoryModel->all(); // Lấy danh sách các danh mục

        $productModel = new Product();
        $products = $productModel->all(); // Lấy danh sách sản phẩm

        // Truyền danh sách danh mục và sản phẩm vào view
        $this->renderViewClient('index', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
