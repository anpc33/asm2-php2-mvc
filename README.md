# Assignment 2 - PHP2 - MVC

## Mô tả Dự án
Dự án này là một website quản lý sản phẩm theo mô hình **MVC (Model-View-Controller)** và **OOP (Lập trình hướng đối tượng)**.
Giao diện Admin được xây dựng sử dụng **BladeOne** và cho phép quản lý:
- **User** (Người dùng)
- **Category** (Danh mục sản phẩm)
- **Product** (Sản phẩm)

## Tính năng chính
### 1. Quản lý User, Category, Product theo CRUD
- **Create**: Thêm mới User, Category, Product
- **Read**: Xem danh sách User, Category, Product
- **Update**: Chỉnh sửa thông tin
- **Delete**: Xóa User, Category, Product
- **Tìm kiếm** theo tên trong danh sách

### 2. Xây dựng chức năng đăng nhập
- Chỉ **Admin** mới truy cập được trang quản trị
- Xác thực bằng email + password
- Lưu trạng thái đăng nhập trong **SESSION**
- Hiển thị thông báo lỗi khi đăng nhập sai

### 3. Middleware cho Router
- Chỉ cho phép truy cập route admin khi đã đăng nhập vào SESSION
- Nếu chưa đăng nhập, tự động chuyển về trang login

### 4. Validate dữ liệu
- Kiểm tra tên, email, password khi đăng nhập
- Kiểm tra trước khi thêm/sửa sản phẩm, danh mục, user
- Sử dụng **rakit/validation**

## Cài đặt và Chạy Dự án
### 1. Clone repository
```sh
git clone https://github.com/anpc33/asm2-php2-mvc.git
cd asm2-php2-mvc
```

### 2. Cài đặt thư viện qua Composer
```sh
composer install
```

### 3. Cấu hình biến môi trường
- Tạo file `.env` và cài đặt database
```sh
cp .env.example .env
```
- Chỉnh sửa `.env`:
```ini
DB_HOST=localhost
DB_NAME=your_database_name
DB_USER=root
DB_PASS=
```

### 4. Khởi chạy dự án
Chạy server PHP:
```sh
php -S localhost:8080 -t public/
```
Truy cập: `http://localhost:8080`

## Cài đặt Database
Chạy file SQL trong `database/` để tạo bảng:
```sh
php database/migrations.php
```

## Công Nghệ Sử Dụng
- PHP 8+
- Composer
- MySQL
- **bramus/router** (Routing)
- **doctrine/dbal** (Database)
- **vlucas/phpdotenv** (Env Config)
- **rakit/validation** (Validation)
- **eftec/bladeone** (Template Engine)

## Tác Giả
**Họ tên:** [anpc33]

**Email:** [ancqph51578@gmail.com]

Nếu có bất kỳ vấn đề nào, vui lòng mở issue trên GitHub! 🚀

