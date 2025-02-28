<?php

namespace App\Controllers\Backend;

use eftec\bladeone\BladeOne;

class BaseController
{
  protected $blade;

  public function __construct()
  {
    $basePath = dirname(__DIR__, 3);
    $views = $basePath . '/views';
    $cache = $basePath . '/cache';

    $this->blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);
  }

  protected function render($view, $data = [])
  {
    echo $this->blade->run($view, $data);
  }

  protected function redirect($path)
  {
    header('Location: ' . $_ENV['BASE_URL'] . $path);
    exit;
  }

  protected function setFlash($type, $message)
  {
    $_SESSION['flash'] = [
      'type' => $type,
      'message' => $message
    ];
  }

  protected function getFlash()
  {
    if (isset($_SESSION['flash'])) {
      $flash = $_SESSION['flash'];
      unset($_SESSION['flash']);
      return $flash;
    }
    return null;
  }

  protected function getToastrFlash()
  {
    if (isset($_SESSION['toastr'])) {
      $flash = $_SESSION['toastr'];
      unset($_SESSION['toastr']);
      return $flash;
    }
    return null;
  }
}
