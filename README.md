# DOUBLE T SHOP 

**DOUBLE T SHOP** là một website bán hàng được xây dựng bằng **PHP thuần**, hỗ trợ đầy đủ các chức năng cơ bản như một trang thương mại điện tử hiện đại, bao gồm **giỏ hàng**, **thanh toán trực tuyến (VNPAY, PayPal)**, **xem nhanh sản phẩm**, và nhiều tính năng tiện lợi khác.

---

## Tính năng nổi bật

- Giao diện responsive với **Bootstrap 4**
- Quản lý sản phẩm, danh mục, người dùng, đơn hàng
- **Xem nhanh sản phẩm** không cần reload trang (AJAX)
- Tìm kiếm và phân trang sản phẩm
- Thêm/sửa/xoá giỏ hàng
- Thanh toán trực tuyến qua:
  -  **VNPAY**
  - **PayPal**
- Trang quản trị dành cho Admin (quản lý sản phẩm, đơn hàng, phản hồi...)


---

## Công nghệ sử dụng

- **Frontend**: HTML, CSS, JavaScript, Bootstrap 4, jQuery
- **Backend**: PHP thuần (không dùng framework)
- **Database**: MySQL
- **API & Payment**: VNPAY, PayPal SDK

---

## Cấu trúc thư mục

```bash
.
├── admin/                 # Khu vực quản trị
│   ├── config/            # Kết nối CSDL
│   └── modules/           # Quản lý sản phẩm, đơn hàng, v.v.
│   └── css/               # File css bên Admin
│   └── js/                # Js admin
├── css/                   # File CSS tự viết
├── js/                    # JavaScript bên user
├── lib/                   # Chứa các thư viện sử dụng
├── pages/                 # Các thành phần trang chính (menu, slider, main...)
│   └── ajax/              # Xử lý AJAX cho "xem nhanh"
│   └── main/              # Chứa các trang xử lý chính
│   └── sidebar/           # Sidebar bên trái
├── index.php              # Trang chính
└── README.md              # Tệp hướng dẫn
````

## Cài đặt và chạy hệ thống

### 1. Clone dự án
```bash
git clone https://github.com/Huy-Toan/webbanhang-php.git
````
### 2. Tạo database MySQL
- Tạo database trên mysql

### 3. Cấu hình kết nối CSDL
- Mở file admin/config/config.php và sửa lại thông tin kết nối với tên cơ sở dữ liệu của bạn

