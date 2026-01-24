# TavaCam Theme - Cấu Trúc Và Hướng Dẫn

## 📋 Thông Tin Theme
- **Tên Theme**: TavaCam (TavaVision AI Camera Security)
- **Version**: 1.3
- **Author**: Antigravity
- **Framework**: WordPress + Tailwind CSS CDN
- **Phong cách**: Modern AI Security Camera Interface

---

## 📁 Cấu Trúc Files

### Core Template Files
```
tavacam/
├── style.css              # Theme stylesheet & metadata
├── functions.php          # Theme functions & configurations
├── header.php            # Header template với mega menu
├── footer.php            # Footer template
├── index.php             # Archive/blog listing template
├── front-page.php        # Homepage template
├── single.php            # Single post template
├── 404.php              # 404 Not Found page (PTZ Camera style) ✨ MỚI
└── animations.css        # Custom animations
```

### Page Templates
```
├── page-about.php        # About Us page
├── page-insights.php     # Insights/News page
├── page-mobile-app.php   # Mobile App showcase page
├── page-philosophy.php   # Philosophy page
```

### Template Reference Files (.txt)
```
├── 404.txt              # React component reference cho 404 page
├── about-us.txt         # About page reference
├── app.txt              # App page reference
├── list-post.txt        # Post listing reference
├── single-post.txt      # Single post reference
├── triet-ly-san-pham.txt # Product philosophy reference
```

---

## 🎨 Tính Năng Theme

### 1. Menu System
Theme đã đăng ký 3 vị trí menu:
- **Primary Menu** (`primary`) - Menu chính trên header
- **Footer Menu** (`footer`) - Menu ở footer
- **Mobile Menu** (`mobile`) - Menu cho mobile responsive

**Cách sử dụng**: 
WordPress Admin → Appearance → Menus → Tạo menu và assign vào location tương ứng

### 2. Widget Areas
Theme có 4 widget areas:
- **Sidebar** (`sidebar-1`) - Sidebar chính
- **Footer Widget Area 1** (`footer-1`) - Footer column 1
- **Footer Widget Area 2** (`footer-2`) - Footer column 2
- **Footer Widget Area 3** (`footer-3`) - Footer column 3

### 3. Custom Image Sizes
- `tavacam-featured`: 1200x675px (16:9 ratio) - Featured images
- `tavacam-thumbnail`: 600x400px - Card thumbnails
- `tavacam-hero`: 1920x1080px - Hero/banner images

### 4. Theme Supports
✅ Post Thumbnails
✅ Title Tag Management
✅ HTML5 Markup
✅ Responsive Embeds
✅ Block Editor Styles
✅ Wide & Full Alignment
✅ Dark Mode Toggle
✅ Custom Logo Support

---

## 🎯 Hệ Thống Trang Hiện Có

### Trang Chính (Templates)
1. **Homepage** (`front-page.php`) - Trang chủ với hero section, products showcase
2. **About** (`page-about.php`) - Giới thiệu công ty
3. **Insights** (`page-insights.php`) - Trang tin tức/blog
4. **Mobile App** (`page-mobile-app.php`) - Giới thiệu ứng dụng mobile
5. **Philosophy** (`page-philosophy.php`) - Triết lý sản phẩm
6. **404 Error** (`404.php`) - ✨ **MỚI** - PTZ Camera monitoring style

### Archive & Blog
- `index.php` - Template cho blog listing/archive
- `single.php` - Template cho single post

---

## 🎨 Design System

### Colors
```css
--brand-orange: #f84b2f;      /* Primary orange */
--brand-orange-hover: #e03a1f;
--brand-dark: #0f172a;         /* Slate 900 */
--brand-gray: #64748b;         /* Slate 500 */
```

### Typography
- **Body Font**: Inter (400-900)
- **Monospace Font**: Share Tech Mono (cho 404 page)
- **Base Size**: 15px

### Components
- `.btn-primary` - Primary button style
- `.section-title` - Section heading style
- `.section-subtitle` - Section subtitle with brand color
- `.glass-card` - Glassmorphism card
- `.item-why-premium` - Feature card với hover effect

---

## ✨ Trang 404 Mới - PTZ Camera Style

### Tính Năng Đặc Biệt
Trang 404 được thiết kế theo phong cách **PTZ Security Camera Interface**:

1. **Night Vision Mode** 🌙
   - Filter màu xanh lục đặc trưng
   - Có thể toggle ON/OFF

2. **PTZ (Pan-Tilt-Zoom) Effect** 🎥
   - Background di chuyển theo chuột (parallax effect)
   - Zoom in/out button

3. **Camera OSD (On-Screen Display)** 📺
   - REC indicator với blinking red dot
   - Real-time clock display
   - Camera location label
   - FPS counter
   - Signal & battery status

4. **AI Detection Boxes** 🤖
   - Decorative AI object detection overlays
   - Mouse tracking box
   - Person & vehicle detection labels

5. **Noise & Effects** 🎬
   - Film grain noise overlay
   - Scanline effect
   - Focus hunting animation
   - Vignette darkening

### Preview
```
┌─────────────────────────────────────┐
│ [●REC] CAM_04            12:30:45  │
│                                     │
│         ┌───────────────┐           │
│         │   WARNING     │           │
│         │     404       │           │
│         │ Object Not    │           │
│         │    Found      │           │
│         │  [Home][Retry]│           │
│         └───────────────┘           │
│                                     │
│ Signal:98%  UPS:100%  [🌙] [🔍]    │
└─────────────────────────────────────┘
```

---

## 📝 Checklist Config

### ✅ Đã Hoàn Thành
- [x] Tạo file 404.php với design PTZ camera
- [x] Đăng ký multiple menu locations (primary, footer, mobile)
- [x] Thêm custom image sizes (featured, thumbnail, hero)
- [x] Đăng ký widget areas (sidebar + 3 footer columns)
- [x] Cải thiện excerpt (30 words, custom more string)
- [x] Thêm body classes tùy chỉnh
- [x] Support Block Editor & Wide Alignment
- [x] Update theme version lên 1.3
- [x] Share Tech Mono font cho 404 page

### 📌 Cần Làm Tiếp (Tùy Chọn)
- [ ] Tạo menu cho Primary location (WordPress Admin)
- [ ] Upload logo cho theme
- [ ] Tạo các pages và assign page templates
- [ ] Thêm widgets vào footer areas
- [ ] Tạo custom post types nếu cần (Products, Solutions, etc.)
- [ ] Thêm breadcrumbs navigation
- [ ] Setup WooCommerce nếu cần bán hàng

---

## 🚀 Cách Sử Dụng

### 1. Activate Theme
```
WordPress Admin → Appearance → Themes → Activate "TavaCam"
```

### 2. Setup Menu
```
1. Vào Appearance → Menus
2. Tạo menu mới
3. Thêm các items (Pages, Custom Links, Categories)
4. Assign vào "Primary Menu" location
5. Save Menu
```

### 3. Tạo Pages Với Templates
```
1. Vào Pages → Add New
2. Tạo page (ví dụ: "About Us")
3. Ở sidebar bên phải → Page Attributes → Template
4. Chọn template tương ứng (ví dụ: "About")
5. Publish
```

### 4. Test 404 Page
Truy cập một URL không tồn tại để xem trang 404:
```
https://your-site.com/page-khong-ton-tai
```

---

## 🎯 Menu Structure Đề Xuất

### Primary Menu
```
├── Trang chủ (Home)
├── Về chúng tôi (About)
├── Tin tức (Insights)
├── Mobile App
├── Triết Lý (Philosophy)
├── Sản phẩm (Products) [Mega Menu]
│   ├── Camera Thông Minh
│   ├── Đầu ghi NVR
│   └── Màn hình TavaLED
├── Giải pháp (Solutions) [Mega Menu]
│   ├── Bán lẻ & Chuỗi
│   ├── Nhà máy & KCN
│   └── Giao thông
├── Công nghệ (Technology) [Dropdown]
├── Hỗ trợ (Support) [Dropdown]
└── Liên hệ (Contact)
```

### Footer Menu
```
├── Chính sách bảo hành
├── Chính sách đổi trả
├── Điều khoản sử dụng
└── Chính sách bảo mật
```

---

## 🔧 Troubleshooting

### Menu không hiển thị?
1. Check đã assign menu vào location chưa
2. Check trong `header.php` có gọi `wp_nav_menu()` đúng location chưa

### 404 page không hoạt động?
1. Vào Settings → Permalinks → Save Changes (flush rewrite rules)
2. Check file `404.php` có tồn tại trong theme folder

### Dark mode không work?
1. Kiểm tra localStorage của browser
2. Clear cache và reload trang
3. Check console có error JavaScript không

---

## 📞 Support & Credits

**Theme Developer**: Antigravity (Google DeepMind Advanced Agentic Coding Team)  
**Design Inspiration**: FPT Camera, Modern Security Systems  
**Framework**: WordPress + Tailwind CSS  
**Icons**: Lucide Icons  
**Fonts**: Google Fonts (Inter, Share Tech Mono)

---

**Version**: 1.3  
**Last Updated**: January 2026  
**Status**: ✅ Production Ready
