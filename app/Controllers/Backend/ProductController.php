<?php

namespace App\Controllers\Backend;

use Rakit\Validation\Validator;
use App\Models\ProductModel;
use eftec\bladeone\BladeOne;
use Exception;
use App\Models\CategoryModel;

class ProductController extends BaseController
{
  protected $productModel;
  protected $CategoryModel;
  protected $blade;
  protected $module = 'product';
  private $validator;




  public function __construct()
  {
    $this->productModel = new ProductModel();
    $this->CategoryModel = new CategoryModel();
    $this->validator = new Validator;
    parent::__construct();
  }

  public function index()
  {
    $data = $this->productModel->getAll();
    $tableHead = [
      'id' => 'ID',
      'name' => 'Tên sản phẩm',
      'category_name' => 'Tên danh mục',
      'img_thumbnail' => 'Hình ảnh',
      'created_at' => 'Ngày tạo',
    ];

    $this->render('products.list', [
      'title' => 'Product',
      'breadcrumb' => 'Danh sách product',
      'data' => $data,
      'tableHead' => $tableHead,
      'module' => $this->module
    ]);
  }

  public function add()
  {
    $categories = $this->CategoryModel->getAll();

    $this->render('products.save', [
      'title' => 'Add Product',
      'breadcrumb' => 'Create Product',
      'method' => 'create',
      'data' => [],
      'categories' => $categories,
      'module' => $this->module
    ]);
  }

  public function store()
  {
    $request = $_POST;
    $request['img_thumbnail'] = $this->uploadImage($_FILES['img_thumbnail']);
    $this->save($request);
    unset($_SESSION['old_data']);
  }

  public function update($id)
  {
    $productModel = new ProductModel();
    $product = $productModel->find($id);


    $data = [
      'name' => $_POST['name'],
      'category_id' => $_POST['category_id'],
    ];


    if (!empty($_FILES['img_thumbnail']['name'])) {
      $data['img_thumbnail'] = $this->uploadImage($_FILES['img_thumbnail']);
    } else {
      $data['img_thumbnail'] = $product['img_thumbnail'];
    }


    $productModel->save($data, $id);

    header("Location: /admin/product");
    exit;
  }

  public function edit($id)
  {
    $data = $this->productModel->find($id);
    if (!$data) {
      $_SESSION['error'] = "Product not found!";
      header("Location: /admin/product");
      exit();
    }

    $categories = $this->CategoryModel->getAll();

    $this->render('products.save', [
      'title' => 'Edit Product',
      'breadcrumb' => 'Edit product',
      'method' => 'edit',
      'data' => $data,
      'categories' => $categories,
      'module' => $this->module
    ]);
  }

  public function destroy($id)
  {
    try {
      $deleted = $this->productModel->delete($id);

      if ($deleted) {
        $_SESSION['success'] = "Product deleted successfully!";
      } else {
        $_SESSION['error'] = "Failed to delete product!";
      }
    } catch (\Exception $e) {
      $_SESSION['error'] = "Error: " . $e->getMessage();
    }
    header("Location: /admin/product");
    exit();
  }

  public function save($request, $id = null)
  {
    try {
      $errors = $this->validateRequest($request);
      if ($errors) {
        $_SESSION['errors'] = $errors->firstOfAll();
        $_SESSION['old_data'] = $request;
        $redirectUrl = $id ? "/admin/product/edit/$id" : "/admin/product/add";
        header("Location: $redirectUrl");
        exit();
      }

      $request['created_at'] = date('Y-m-d H:i:s');
      $this->productModel->save($request, $id);
      $_SESSION['success'] = $id ? "Product updated successfully!" : "Product created successfully!";
      header("Location: /admin/product");
      exit();
    } catch (Exception $e) {
      $_SESSION['error'] = "Error: " . $e->getMessage();
      var_dump($_SESSION['error']);
      die();
      header("Location: /admin/product");
      exit();
    }
  }

  private function validateRequest($request)
  {
    $validation = $this->validator->make($request, [
      'name' => 'required|min:3|max:255',
      'category_id' => 'required|integer',
      'img_thumbnail' => 'required',
    ]);

    $validation->validate();

    return $validation->fails() ? $validation->errors() : null;
  }



  private function uploadImage($file)
  {
    if ($file['error'] === 0) {
      $targetDir = "public/uploads/";
      $fileName = time() . "_" . basename($file["name"]);
      $targetFile = $targetDir . $fileName;

      if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        return $targetFile;
      }
    }
    return null;
  }


  public function search()
  {
    $keyword = $_GET['keyword'] ?? '';
    $data = $this->productModel->search($keyword);
    $tableHead = [
      'id' => 'ID',
      'name' => 'Tên sản phẩm',
      'category_name' => 'Tên danh mục',
      'img_thumbnail' => 'Hình ảnh',
      'created_at' => 'Ngày tạo',
    ];
    $this->render('products.list', [
      'title' => 'Danh sách sản phẩm',
      'breadcrumb' => 'Tìm kiếm sản phẩm',
      'tableHead' => $tableHead,
      'data' => $data,
      'keyword' => $keyword,
      'module' => $this->module
    ]);
  }
}
