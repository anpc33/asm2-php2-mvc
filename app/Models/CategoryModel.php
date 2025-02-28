<?php

namespace App\Models;

class CategoryModel extends BaseModel
{
  protected $table = 'categories';



  public function getAll()
  {
    return $this->queryBuilder
      ->select('*')
      ->from($this->table)
      ->executeQuery()
      ->fetchAllAssociative();
  }
  public function save($data, $id = null)
  {
    if ($id) {
      return $this->queryBuilder
        ->update($this->table)
        ->set('name', ':name')
        ->where('id = :id')
        ->setParameter('name', $data['name'])
        ->setParameter('id', $id)
        ->executeStatement();
    } else {
      return $this->queryBuilder
        ->insert($this->table)
        ->values([
          'name' => ':name'
        ])
        ->setParameter('name', $data['name'])
        ->executeStatement();
    }
  }

  public function find($id)
  {
    return $this->queryBuilder
      ->select('*')
      ->from($this->table)
      ->where('id = :id')
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
