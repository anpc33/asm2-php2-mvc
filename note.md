    @php
    $action = ($method === 'create') ? 'store.php' : 'update.php?id='.$data['email'];
    @endphp

    <form action="{{ $action }}" method="post" class="row g-4" style="max-width: 800px; margin: auto;">
        <div class="col-md-6">
            <label class="form-label">Họ và tên</label>
            <input type="text" name="name" class="form-control" value="{{ $data['name'] ?? '' }}" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $data['email'] ?? '' }}" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Số điện thoại</label>
            <input type="text" name="phone" class="form-control" value="{{ $data['phone'] ?? '' }}">
        </div>

        <div class="col-md-6">
            <label class="form-label">Avatar</label>
            <input type="text" name="avatar" class="form-control" value="{{ $data['avatar'] ?? '' }}">
        </div>

        <div class="col-md-6">
            <label class="form-label">Ngày sinh</label>
            <input type="date" name="date" class="form-control" value="{{ $data['date'] ?? '' }}">
        </div>

        <!-- Trạng thái -->
        <div class="col-md-6">
            <label class="form-label">Trạng thái</label>
            <select name="status" class="form-control">
                <option value="1" {{ ($data['status'] == 1) ? 'selected' : '' }}>Đã bị khóa</option>
                <option value="2" {{ ($data['status'] == 2) ? 'selected' : '' }}>Đang hoạt động</option>
            </select>
        </div>

        <div class="col-12 text-end mt-4">
            <button type="submit" class="btn btn-success">Lưu</button>
            <button type="reset" class="btn btn-secondary">Nhập lại</button>
        </div>
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
