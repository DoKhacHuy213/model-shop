# 🎮 Hệ thống quản lý bán đồ chơi

## 👨‍🎓 Họ tên sinh viên: Đỗ Khắc Huy  
**Mã sinh viên:** 12345678

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


## 🖼️ Ảnh chụp màn hình chức năng chính

### 🔐 Trang đăng nhập

![Uploading Screenshot 2025-06-26 084830.png…]()



## 💻 Code minh họa phần chính

### 📁 Model: `User.php`

```php
public function orders()
{
    return $this->hasMany(Order::class);
}

