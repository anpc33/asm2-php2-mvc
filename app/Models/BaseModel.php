<?php

namespace App\Models;

use App\Common\Database;

class BaseModel
{
  protected $queryBuilder;
  protected $connection;

  public function __construct()
  {
    $this->connection = Database::getConnection();
    $this->queryBuilder = Database::getQueryBuilder();
  }
}
