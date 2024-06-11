<?php

namespace XuongOop\Salessa\Controllers\Admin;

use XuongOop\Salessa\Commons\Controller;
use XuongOop\Salessa\Models\Category;
use XuongOop\Salessa\Models\Product;


class DashboardController extends Controller
{
    // public function dashboard()
    // {
    //     $this->renderViewAdmin(__FUNCTION__);
    // }
    public function dashboard()
    {
        // Tạo mới đối tượng Category và Product
        $categoryModel = new Category();
        $productModel = new Product();

        // Lấy danh sách các danh mục
        $categories = $categoryModel->all();

        // Khởi tạo mảng để lưu trữ thông tin thống kê
        $listthongke = [];

        // Đếm số lượng sản phẩm trong mỗi danh mục
        foreach ($categories as $category) {
            $categoryId = $category['id'];
            $productCount = $productModel->countByCategory($categoryId);

            // Thêm thông tin vào mảng thống kê
            $listthongke[] = [
                'name' => $category['name'],
                'product_count' => $productCount
            ];
        }

        // Trả về view Dashboard và truyền dữ liệu thống kê
        return $this->renderViewAdmin('dashboard', compact('listthongke'));
    }
}
