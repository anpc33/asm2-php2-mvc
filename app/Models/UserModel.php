<?php

namespace App\Models;

class UserModel extends BaseModel
{
  protected $table = 'users';

  public function getAllUsers()
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
      // Update user
      return $this->queryBuilder
        ->update($this->table)
        ->set('name', ':name')
        ->set('email', ':email')
        ->set('role_id', ':role_id')
        ->set('status', ':status')
        ->where('id = :id')
        ->setParameter('name', $data['name'])
        ->setParameter('email', $data['email'])
        ->setParameter('role_id', $data['role_id'])
        ->setParameter('status', $data['status'])
        ->setParameter('id', $id)
        ->executeStatement();
    } else {

      return $this->queryBuilder
        ->insert($this->table)
        ->values([
          'name' => ':name',
          'email' => ':email',
          'password' => ':password',
          'role_id' => ':role_id',
          'status' => ':status',
        ])
        ->setParameter('name', $data['name'])
        ->setParameter('email', $data['email'])
        ->setParameter('password', $data['password'])
        ->setParameter('role_id', $data['role_id'])
        ->setParameter('status', $data['status'])
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
  public function searchUsers($keyword)
  {
    return $this->queryBuilder
      ->select('*')
      ->from($this->table)
      ->where('name LIKE ?')
      ->setParameter(0, "%$keyword%")
      ->executeQuery()
      ->fetchAllAssociative();
  }

  public function findByEmail($email)
  {
    return $this->queryBuilder
      ->select('*')
      ->from($this->table)
      ->where('email = :email')
      ->setParameter('email', $email)
      ->executeQuery()
      ->fetchAssociative();
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
