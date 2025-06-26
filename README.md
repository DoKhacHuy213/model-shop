# 🎮 Hệ thống quản lý bán đồ chơi

## 👨‍🎓 Họ tên sinh viên: Đỗ Khắc Huy  
**Mã sinh viên:23010020

---

## 📌 Giới thiệu dự án

Đây là đồ án môn học xây dựng hệ thống quản lý bán đồ chơi sử dụng **Laravel 11**.  
Ứng dụng cung cấp các chức năng cho người dùng và quản trị viên như:

- Đăng ký / Đăng nhập tài khoản
- Xem danh mục đồ chơi
- Đặt hàng và theo dõi đơn hàng
- Quản lý sản phẩm, người dùng và đơn hàng (Admin)

---

## 🧱 Cấu trúc hệ thống (Class Diagram)
![a6f8c2cf-2d91-4c31-a0d0-7d06863b1b98](https://github.com/user-attachments/assets/7e641ea3-aeb5-4ad0-9e51-91c957a0304f)


## 🖼️ Ảnh chụp màn hình chức năng chính

### 🔐 Trang đăng nhập

![3b79f49c-1840-41c0-994c-dbc747f03164](https://github.com/user-attachments/assets/f8716424-fef0-427d-b68a-fef8ea7039a2)






## 💻 Code minh họa phần chính

### 📁 Model: `User.php`

```php
public function orders()
{
    return $this->hasMany(Order::class);
}
📁 Model: Product.php
public function orders()
{
    return $this->belongsToMany(Order::class)->withPivot('quantity');
}
📁 Controller: ProductController.php
public function index()
{
    $products = Product::all();
    return view('products.index', compact('products'));
}
📁 View: resources/views/products/index.blade.php
@foreach ($products as $product)
    <div>{{ $product->name }} - {{ $product->price }} VNĐ</div>
@endforeach
🔗 Liên kết dự án
📂 Link Repository GitHub:
https://github.com/DoKhacHuy213/model-shop
⚙️ Công nghệ sử dụng
Laravel 11

PHP 8.x

MySQL / MariaDB

TailwindCSS / Bootstrap

Laravel Breeze (xác thực)

Cloud deployment: [Heroku / Vercel / Render / Codespaces]

