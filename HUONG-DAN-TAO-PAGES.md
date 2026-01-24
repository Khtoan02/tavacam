# Hướng Dẫn Tạo Pages Cho TavaCam Theme

## 🎯 Pages Cần Tạo

Theme TavaCam đã được cấu hình với các page templates. Bạn cần tạo các pages sau trong WordPress Admin:

---

## 📝 BƯỚC 1: Tạo Page "Về Chúng Tôi"

### Thông tin Page:
- **Tiêu đề**: Về Chúng Tôi
- **Slug**: `ve-chung-toi` (hoặc `about`)
- **Template**: About (page-about.php)

### Cách tạo:
1. Vào **WordPress Admin** → **Pages** → **Add New**
2. **Title**: Nhập "Về Chúng Tôi"
3. **Permalink**: Click "Edit" và đổi thành `ve-chung-toi`
4. Ở sidebar bên phải → **Page Attributes** → **Template**
5. Chọn template: **About**
6. Click **Publish**

**URL sau khi tạo**: `https://your-site.com/ve-chung-toi`

---

## 📰 BƯỚC 2: Tạo Page "Tin Tức / Insights"

### Thông tin Page:
- **Tiêu đề**: Tin Tức
- **Slug**: `tin-tuc` (hoặc `insights`)
- **Template**: Insights (page-insights.php)

### Cách tạo:
1. Vào **WordPress Admin** → **Pages** → **Add New**
2. **Title**: Nhập "Tin Tức"
3. **Permalink**: Click "Edit" và đổi thành `tin-tuc`
4. Ở sidebar bên phải → **Page Attributes** → **Template**
5. Chọn template: **Insights**
6. Click **Publish**

**URL sau khi tạo**: `https://your-site.com/tin-tuc`

---

## 📱 BƯỚC 3: Tạo Page "Ứng Dụng Mobile"

### Thông tin Page:
- **Tiêu đề**: Ứng Dụng TavaVision
- **Slug**: `ung-dung-mobile` (hoặc `mobile-app`)
- **Template**: Mobile App (page-mobile-app.php)

### Cách tạo:
1. Vào **WordPress Admin** → **Pages** → **Add New**
2. **Title**: Nhập "Ứng Dụng TavaVision"
3. **Permalink**: Click "Edit" và đổi thành `ung-dung-mobile`
4. Ở sidebar bên phải → **Page Attributes** → **Template**
5. Chọn template: **Mobile App**
6. Click **Publish**

**URL sau khi tạo**: `https://your-site.com/ung-dung-mobile`

---

## 🎓 BƯỚC 4: Tạo Page "Triết Lý Sản Phẩm"

### Thông tin Page:
- **Tiêu đề**: Triết Lý Sản Phẩm
- **Slug**: `triet-ly` (hoặc `philosophy`)
- **Template**: Philosophy (page-philosophy.php)

### Cách tạo:
1. Vào **WordPress Admin** → **Pages** → **Add New**
2. **Title**: Nhập "Triết Lý Sản Phẩm"
3. **Permalink**: Click "Edit" và đổi thành `triet-ly`
4. Ở sidebar bên phải → **Page Attributes** → **Template**
5. Chọn template: **Philosophy**
6. Click **Publish**

**URL sau khi tạo**: `https://your-site.com/triet-ly`

---

## 🏠 BƯỚC 5: Set Homepage (Tùy Chọn)

Nếu muốn set trang chủ tùy chỉnh:

1. Vào **Settings** → **Reading**
2. **Your homepage displays**: Chọn **A static page**
3. **Homepage**: Chọn page bạn muốn làm trang chủ
4. **Posts page**: Chọn page để hiển thị blog (có thể để trống)
5. Click **Save Changes**

---

## ✅ Checklist Sau Khi Tạo Pages

- [ ] Page "Về Chúng Tôi" với slug `ve-chung-toi`
- [ ] Page "Tin Tức" với slug `tin-tuc`
- [ ] Page "Ứng Dụng Mobile" với slug `ung-dung-mobile`
- [ ] Page "Triết Lý" với slug `triet-ly`
- [ ] Vào **Settings** → **Permalinks** → Click **Save Changes** (flush rewrite rules)
- [ ] Test tất cả các pages bằng cách click vào menu

---

## 🔗 Cấu Hình Header Đã Hoàn Thành

Header đã được cấu hình tự động tìm các pages theo slug:

### Menu "Về Chúng Tôi":
Tìm theo thứ tự:
1. `ve-chung-toi`
2. `about`
3. `gioi-thieu`

### Menu "Tin Tức":
Tìm theo thứ tự:
1. `tin-tuc`
2. `insights`
3. `news`

### Banner "Xem chi tiết" (Mobile App):
Tìm theo thứ tự:
1. `ung-dung-mobile`
2. `mobile-app`

### Banner "Tìm hiểu thêm" (VMS Platform):
Tìm theo thứ tự:
1. `triet-ly`
2. `philosophy`

---

## 🎨 Templates Có Sẵn

| Template File | Tên Hiển Thị | Mục Đích |
|--------------|--------------|----------|
| `page-about.php` | About | Giới thiệu công ty |
| `page-insights.php` | Insights | Tin tức/Blog listing |
| `page-mobile-app.php` | Mobile App | Showcase ứng dụng mobile |
| `page-philosophy.php` | Philosophy | Triết lý sản phẩm |

---

## 🚀 Test Pages

Sau khi tạo xong các pages:

1. **Refresh trang chủ** và check menu header
2. **Click vào menu "Về Chúng Tôi"** → Phải hiển thị page-about.php
3. **Click vào menu "Tin Tức"** → Phải hiển thị page-insights.php
4. **Hover vào "Sản phẩm"** → Click "Xem chi tiết" ở banner → Phải đến mobile-app page
5. **Hover vào "Sản phẩm"** → Click "Tìm hiểu thêm" ở VMS banner → Phải đến philosophy page

---

## 🔧 Troubleshooting

### Page không hiển thị template?
1. Check trong Page Editor → **Page Attributes** → Template đã chọn đúng chưa
2. Refresh hoặc clear cache
3. Update page lại

### Link trong menu bị 404?
1. Vào **Settings** → **Permalinks**
2. Không cần thay đổi gì, chỉ cần click **Save Changes**
3. Refresh trang và thử lại

### Menu không update?
1. Clear browser cache
2. Nếu dùng caching plugin, purge cache
3. Hard refresh trang (Cmd+Shift+R trên Mac, Ctrl+Shift+R trên Windows)

---

## 📞 Quick Links

| Page | Slug Đề Xuất | URL Preview |
|------|--------------|-------------|
| Về Chúng Tôi | `ve-chung-toi` | `/ve-chung-toi` |
| Tin Tức | `tin-tuc` | `/tin-tuc` |
| Mobile App | `ung-dung-mobile` | `/ung-dung-mobile` |
| Triết Lý | `triet-ly` | `/triet-ly` |

---

**Lưu ý**: Tất cả các links trong header đã được cấu hình để tự động tìm pages theo slug. Nếu không tìm thấy page, links sẽ fallback về URL mặc định.

**Status**: ✅ Header đã được cấu hình xong, chỉ cần tạo pages trong WordPress Admin!
