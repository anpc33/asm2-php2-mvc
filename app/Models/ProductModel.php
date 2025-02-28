<?php

namespace App\Models;

class ProductModel extends BaseModel
{
  protected $table = 'products';

  public function getAll()
  {
    return $this->queryBuilder
      ->select('p.*, c.name as category_name')
      ->from('products', 'p')
      ->leftJoin('p', 'categories', 'c', 'p.category_id = c.id')
      ->executeQuery()
      ->fetchAllAssociative();
  }



  public function save($data, $id = null)
  {
    if ($id) {

      $product = $this->find($id);
      if (empty($data['img_thumbnail'])) {
        $data['img_thumbnail'] = $product['img_thumbnail'];
      }

      return $this->queryBuilder
        ->update($this->table)
        ->set('name', ':name')
        ->set('category_id', ':category_id')
        ->set('img_thumbnail', ':img_thumbnail')
        ->where('id = :id')
        ->setParameter('name', $data['name'])
        ->setParameter('category_id', $data['category_id'])
        ->setParameter('img_thumbnail', $data['img_thumbnail'])
        ->setParameter('id', $id)
        ->executeStatement();
    } else {
      $data['created_at'] = date('Y-m-d H:i:s');

      return $this->queryBuilder
        ->insert($this->table)
        ->values([
          'name' => ':name',
          'category_id' => ':category_id',
          'img_thumbnail' => ':img_thumbnail',
          'created_at' => ':created_at',
        ])
        ->setParameter('name', $data['name'])
        ->setParameter('category_id', $data['category_id'])
        ->setParameter('img_thumbnail', $data['img_thumbnail'])
        ->setParameter('created_at', $data['created_at'])
        ->executeStatement();
    }
  }




  public function find($id)
  {
    return $this->queryBuilder
      ->select('p.*')
      ->from('products', 'p')
      ->where('p.id = :id')
      ->setParameter('id', $id)
      ->executeQuery()
      ->fetchAssociative();
  }

  public function search($keyword)
  {
    return $this->queryBuilder
      ->select('*')
      ->from($this->table)
      ->where('name LIKE ?')
      ->setParameter(0, "%$keyword%")
      ->executeQuery()
      ->fetchAllAssociative();
  }

  public function delete($id)
  {
    return $this->queryBuilder
      ->delete($this->table)
      ->where('id = :id')
      ->setParameter('id', $id)
      ->executeStatement();
  }
}
