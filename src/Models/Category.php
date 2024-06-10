<?php

namespace XuongOop\Salessa\Models;

use XuongOop\Salessa\Commons\Model;

class Category extends Model
{
    protected string $tableName = 'categories';

    // Phương thức lấy tất cả các danh mục
    public function all()
    {
        return $this->queryBuilder
            ->select(
                'id',
                'name'
            )
            ->from($this->tableName)
            ->orderBy('id', 'desc')
            ->fetchAllAssociative();
    }

    // Phương thức phân trang các danh mục
    public function paginate($page = 1, $perPage = 5)
    {
        $queryBuilder = clone ($this->queryBuilder);

        $totalPage = ceil($this->count() / $perPage);

        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
            ->select(
                'id',
                'name'
            )
            ->from($this->tableName)
            ->setFirstResult($offset)
            ->setMaxResults($perPage)
            ->orderBy('id', 'desc')
            ->fetchAllAssociative();

        return [$data, $totalPage];
    }

    // Phương thức tìm danh mục theo ID
    public function findByID($id)
    {
        return $this->queryBuilder
            ->select(
                'id',
                'name'
            )
            ->from($this->tableName)
            ->where('id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }
}
