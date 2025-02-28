<?php

namespace App\Middleware;

class AuthMiddleware
{
  public function handle()
  {
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
      header('Location: ' . $_ENV['BASE_URL'] . '/auth');
      exit;
    }
    return true;
  }
}
