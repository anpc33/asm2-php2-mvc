<?php

namespace App\Controllers\Backend;

use Rakit\Validation\Validator;
use App\Models\UserModel as User;
use eftec\bladeone\BladeOne;
use Exception;

class UserController extends BaseController
{
  protected $userModel;
  protected $blade;
  protected $module = 'user';
  private $validator;




  public function __construct()
  {
    $this->userModel = new User();
    $this->validator = new Validator;
    parent::__construct();
  }

  public function index()
  {
    $data = $this->userModel->getAllUsers();
    $tableHead = [
      'id' => 'ID',
      'name' => 'Tên người dùng',
      'email' => 'Email',
    ];

    $this->render('users.list', [
      'title' => 'User',
      'breadcrumb' => 'Danh sách user',
      'data' => $data,
      'tableHead' => $tableHead,
      'module' => $this->module
    ]);
  }

  public function add()
  {
    $this->render('users.save', [
      'title' => 'Add User',
      'breadcrumb' => 'Create user',
      'method' => 'create',
      'data' => []
    ]);
  }

  public function store()
  {
    $request = $_POST; // Lấy dữ liệu từ form
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
    $user = $this->userModel->find($id);
    if (!$user) {
      $_SESSION['error'] = "User not found!";
      header("Location: /admin/user");
      exit();
    }

    $this->render('users.save', [
      'title' => 'Edit User',
      'breadcrumb' => 'Edit user',
      'method' => 'edit',
      'data' => $user
    ]);
  }
  public function destroy($id)
  {
    try {

      $deleted = $this->userModel->delete($id);

      if ($deleted) {
        $_SESSION['success'] = "User deleted successfully!";
      } else {
        $_SESSION['error'] = "Failed to delete user!";
      }
    } catch (\Exception $e) {
      $_SESSION['error'] = "Error: " . $e->getMessage();
    }
    header("Location: /admin/user");
    exit();
  }

  public function save($request, $id = null)
  {
    try {
      $errors = $this->validateRequest($request);
      if ($errors) {
        $_SESSION['errors'] = $errors->firstOfAll();
        $_SESSION['old_data'] = $request;
        $redirectUrl = $id ? "/admin/user/edit/$id" : "/admin/user/add";
        header("Location: $redirectUrl");
        exit();
      }
      if (!$id) {
        $request['password'] = password_hash($request['password'], PASSWORD_BCRYPT);
      } else {
        unset($request['password']);
      }

      $request['status'] = 1;

      $this->userModel->save($request, $id);
      $_SESSION['success'] = $id ? "User updated successfully!" : "User created successfully!";
      header("Location: /admin/user");
      exit();
    } catch (Exception $e) {
      $_SESSION['error'] = "Error: " . $e->getMessage();
      header("Location: /admin/user");
      exit();
    }
  }
  private function validateRequest($request)
  {
    $validation = $this->validator->make($request, [
      'name' => 'required|min:3|max:255',
      'email' => 'required|email',
      'password' => isset($request['password']) ? 'min:6' : '',
      'role_id' => 'required|integer',
    ]);

    $validation->validate();

    return $validation->fails() ? $validation->errors() : null;
  }

  public function search()
  {
    $keyword = $_GET['keyword'] ?? '';
    $data = $this->userModel->searchUsers($keyword);
    $tableHead = [
      'id' => 'ID',
      'name' => 'Tên người dùng',
      'email' => 'Email',
    ];

    $this->render('users.list', [
      'title' => 'Danh sách người dùng',
      'breadcrumb' => 'Tìm kiếm',
      'tableHead' => $tableHead,
      'data' => $data,
      'keyword' => $keyword,
      'module' => $this->module
    ]);
  }
}
