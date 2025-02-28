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
            ? "/admin/$module/store"
            : "/admin/$module/update/" . $data['id'];
            @endphp



            <div class="container p-4">
              <form action="{{ $action }}" method="post" enctype="multipart/form-data" class="row g-4"
                style="max-width: 800px; margin: auto;">
                @if($method === 'edit')
                @method('put')
                @endif

                <div class="col-md-6 mb-3">
                  <label for="name" class="form-label">Product Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter product name"
                    value="{{ old('name', isset($data['name']) ? $data['name'] : '') }}" required>
                  @if (!empty($_SESSION['errors']['name']))
                  <div class="text-danger">{{ $_SESSION['errors']['name'] }}</div>
                  <?php unset($_SESSION['errors']['name']); ?>
                  @endif
                </div>

                <div class="col-md-6 mb-3">
                  <label for="category_id" class="form-label">Category</label>
                  <select name="category_id" id="category_id" class="form-control" required>
                    <option value="">-- Chọn danh mục --</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}" {{ isset($data['category_id']) &&
                      $data['category_id']==$category['id'] ? 'selected' : '' }}>
                      {{ $category['name'] }}
                    </option>
                    @endforeach
                  </select>
                  @if (!empty($_SESSION['errors']['category_id']))
                  <div class="text-danger">{{ $_SESSION['errors']['category_id'] }}</div>
                  <?php unset($_SESSION['errors']['category_id']); ?>
                  @endif
                </div>

                <div class="col-md-6 mb-3">
                  <label for="img_thumbnail" class="form-label">Thumbnail</label>
                  <input type="file" name="img_thumbnail" id="img_thumbnail" class="form-control">
                  @if (!empty($data['img_thumbnail']))

                  <img
                    src="<?= (strpos($data['img_thumbnail'] , 'http') === 0) ? $data['img_thumbnail']  : '/' . $data['img_thumbnail']  ?>"
                    alt="Product Image" class="img-thumbnail mt-2" width="150">

                  @endif
                </div>

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
