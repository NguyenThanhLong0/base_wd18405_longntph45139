<?php

namespace XuongOop\Salessa\Controllers\Client;

use XuongOop\Salessa\Models\Product;
use XuongOop\Salessa\Models\Category;
use XuongOop\Salessa\Commons\Controller;

class ProductListController extends Controller
{
    public function indexs()
    {
        $productModel = new Product();
        $categoryModel = new Category();

        // Lấy tất cả sản phẩm
        [$products, $totalPage] = $productModel->paginate(1, 12);

        // Lấy tất cả danh mục
        $categories = $categoryModel->all();

        return $this->renderViewClient('productlist', [
            'products' => $products,
            'categories' => $categories,
            'totalPage' => $totalPage
        ]);
    }

    public function productsByCategory($id)
    {
        $productModel = new Product();
        [$products, $totalPage] = $productModel->paginateByCategory($id);

        $categoryModel = new Category();
        $categories = $categoryModel->allWithProductCount();

        $this->renderViewClient('productlist', compact('products', 'categories', 'totalPage'));
    }
}
