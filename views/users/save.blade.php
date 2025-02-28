@extends('layout')

@section('content')
<div class="page-content">
  <div class="container-fluid">
    @include('components.breadcrumb', ['title' => $title, 'breadcrumb' => $breadcrumb])
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">
              <?= htmlspecialchars($breadcrumb) ?>
            </h5>
          </div>
          <div class="card-body">

            @php
            $action = ($method === 'create')
            ? '/admin/user/store'
            : '/admin/user/update/'. $data['id'];
            @endphp


            <div class="container p-4">
              <form action="{{ $action }}" method="post" class="row g-4" style="max-width: 800px; margin: auto;">
                @if($method === 'edit')
                @method('put')
                @endif

                <!-- Name -->
                <div class="col-md-6 mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name"
                    value="{{ old('name', isset($data['name']) ? $data['name'] : '') }}" required>
                  @if (!empty($_SESSION['errors']['name']))
                  <div class="text-danger">{{ $_SESSION['errors']['name'] }}</div>
                  <?php unset($_SESSION['errors']['name']); ?>
                  @endif
                </div>

                <!-- Email -->
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email"
                    value="{{ isset($data['email']) ? $data['email'] : '' }}">

                  @if (!empty($_SESSION['errors']['email']))
                  <div class="text-danger">{{ $_SESSION['errors']['email'] }}</div>
                  <?php unset($_SESSION['errors']['email']); ?>
                  @endif

                </div>

                <!-- Password -->
                @if ($method === 'create')
                <div class="col-md-6 mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password"
                    required>
                  @if (!empty($_SESSION['errors']['password']))
                  <div class="text-danger">{{ $_SESSION['errors']['password'] }}</div>
                  <?php unset($_SESSION['errors']['password']); ?>
                  @endif
                </div>
                @endif


                <!-- Role ID -->
                <div class="col-md-6 mb-3">
                  <label for="role_id" class="form-label">Role</label>
                  <select name="role_id" id="role_id" class="form-control" required>
                    <option value="1" {{ (isset($data['role_id']) && $data['role_id']==1) ? 'selected' : '' }}>Admin
                    </option>
                    <option value="2" {{ (isset($data['role_id']) && $data['role_id']==2) ? 'selected' : '' }}>User
                    </option>
                  </select>
                  @if (!empty($_SESSION['errors']['role_id']))
                  <div class="text-danger">{{ $_SESSION['errors']['role_id'] }}</div>
                  @endif
                </div>

                <!-- Status -->
                <input type="hidden" name="status" value="1">


                <div class="col-12 text-end mt-4">
                  <button type="submit" class="btn btn-success">Lưu</button>
                  <button type="reset" class="btn btn-secondary">Nhập lại</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>



  </div>
</div>
@endsection
