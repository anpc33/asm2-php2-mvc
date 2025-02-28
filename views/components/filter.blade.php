<div class="d-flex align-items-center mt-3 m-2">


  <!-- Trạng thái -->
  <select class="form-control me-3" name="status">
    <option value="0">Tất cả trạng thái</option>
    <option value="1">Đang hoạt động</option>
    <option value="2">Đã khóa</option>
  </select>

  <!-- Ngày tạo -->
  <input type="text" class="form-control me-3" style="width: 120px" id="date-range" name="date_range"
    placeholder="Chọn khoảng thời gian" value="" />

  <!-- Muốn tìm kiếm khoảng thời gian theo -->
  @php
  $dateFilterOptions = [
  'created_at' => 'Ngày tạo',
  'updated_at' => 'Ngày cập nhật',
  'date_of_birth' => 'Ngày sinh',
  ];
  @endphp
  <select class="form-control me-3" name="date_filter_field">
    <option value="0">Lọc theo thời gian</option>
    @foreach ($dateFilterOptions as $key => $val)
    <option value="{{ $key }}">{{ $val }}</option>
    @endforeach
  </select>

  <!-- Sắp xếp -->
  @php
  $sortBy = [
  'name_asc' => 'Tên (A-Z)',
  'name_desc' => 'Tên (Z - A)',
  ];
  @endphp
  <select class="form-control me-3" name="sort_by">
    <option value="0">Sắp xếp</option>
    @foreach ($sortBy as $key => $val)
    <option value="{{ $key }}">{{ $val }}</option>
    @endforeach
  </select>

  <input type="search" class="form-control flex-grow-1 me-3" placeholder="Tìm kiếm theo tên..." name="keyword"
    value="{{ $keyword ?? '' }}" />

  <!-- Nút tìm kiếm -->
  <input class="btn btn-outline-primary me-3" type="submit" value="Tìm kiếm" />
  <button type="button" class="btn btn-secondary me-3" id="clear-date-range">Xóa</button>
</div>
