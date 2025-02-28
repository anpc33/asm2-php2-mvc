<?php

namespace App\Controllers\Backend;


class DashboardController extends BaseController
{

  public function index()
  {
    $this->render('dashboard', [
      'title' => 'Trang chủ',
      'breadcrumb' => 'Home'
    ]);
  }
}
