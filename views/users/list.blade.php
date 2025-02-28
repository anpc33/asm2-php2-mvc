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
            <div class="card-header align-items-center d-flex justify-content-between">
              <!-- Search Form -->
              <form class="d-block" action="/admin/user/search" method="get" role="search">
                <div class="filters d-block d-md-flex align-items-center gap-3">

                </div>
                @include('components.filter')
              </form>
              <a href="/admin/user/add" class="btn btn-soft-success material-shadow-none">
                <i class="ri-add-circle-line align-middle me-1"></i>
                Thêm bản ghi mới
              </a>
            </div>
            <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
              <thead>
                <tr>
                  <th scope="col" style="width: 10px;">
                    <div class="form-check">
                      <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                    </div>
                  </th>
                  @foreach($tableHead as $key => $val)
                  <th>{{ $val }}</th>
                  @endforeach
                  <th>Active</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @include('components.table_render', ['data' => $data, 'tableHead' => $tableHead, 'module' => $module])
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--end col-->
    </div>



  </div>
</div>
@endsection
