<?php

namespace App\Controllers\Backend;

use Rakit\Validation\Validator;
use App\Models\CategoryModel;
use eftec\bladeone\BladeOne;
use Exception;

class CategoryController extends BaseController
{
  protected $CategoryModel;
  protected $blade;
  protected $module = 'category';
  private $validator;




  public function __construct()
  {
    $this->CategoryModel = new CategoryModel();
    $this->validator = new Validator;
    parent::__construct();
  }

  public function index()
  {
    $data = $this->CategoryModel->getAll();
    $tableHead = [
      'id' => 'ID',
      'name' => 'Tên danh mục',
    ];

    $this->render('categorys.list', [
      'title' => 'Category',
      'breadcrumb' => 'Danh sách danh mục',
      'data' => $data,
      'tableHead' => $tableHead,
      'module' => $this->module
    ]);
  }

  public function add()
  {
    $this->render('categorys.save', [
      'title' => 'Category',
      'breadcrumb' => 'Create Category',
      'method' => 'create',
      'data' => [],
      'module' => $this->module
    ]);
  }

  public function store()
  {
    $request = $_POST;
    $this->save($request);
    unset($_SESSION['old_data']);
  }
  public function update($id)
  {
    $request = $_POST;
    $this->save($request, $id);
  }

  public function edit($id)
  {
    $data = $this->CategoryModel->find($id);
    if (!$data) {
      $_SESSION['error'] = "Data not found!";
      header("Location: /admin/category");
      exit();
    }

    $this->render('categorys.save', [
      'title' => 'Category',
      'breadcrumb' => 'Edit Category',
      'method' => 'edit',
      'data' => $data,
      'module' => $this->module
    ]);
  }
  public function destroy($id)
  {
    try {

      $deleted = $this->CategoryModel->delete($id);

      if ($deleted) {
        $_SESSION['success'] = "Deleted successfully!";
      } else {
        $_SESSION['error'] = "Failed to delete !";
      }
    } catch (\Exception $e) {
      $_SESSION['error'] = "Error: " . $e->getMessage();
    }
    header("Location: /admin/category");
    exit();
  }

  public function save($request, $id = null)
  {
    try {
      $errors = $this->validateRequest($request);
      if ($errors) {
        $_SESSION['errors'] = $errors->firstOfAll();
        $_SESSION['old_data'] = $request;
        $redirectUrl = $id ? "/admin/category/edit/$id" : "/admin/category/add";
        header("Location: $redirectUrl");
        exit();
      }
      $request['status'] = 2;

      $this->CategoryModel->save($request, $id);
      $_SESSION['success'] = $id ? "Updated successfully!" : "Created successfully!";
      header("Location: /admin/category");
      exit();
    } catch (Exception $e) {
      $_SESSION['error'] = "Error: " . $e->getMessage();
      header("Location: /admin/category");
      exit();
    }
  }
  private function validateRequest($request)
  {
    $validation = $this->validator->make($request, [
      'name' => 'required|min:5|max:255',
    ]);

    $validation->validate();

    return $validation->fails() ? $validation->errors() : null;
  }

  public function search()
  {
    $keyword = $_GET['keyword'] ?? '';
    $data = $this->CategoryModel->search($keyword);
    $tableHead = [
      'id' => 'ID',
      'name' => 'Tên danh mục'
    ];

    $this->render('categorys.list', [
      'title' => 'Danh sách danh mục',
      'breadcrumb' => 'Tìm kiếm danh mục',
      'tableHead' => $tableHead,
      'data' => $data,
      'keyword' => $keyword,
      'module' => $this->module
    ]);
  }
}
