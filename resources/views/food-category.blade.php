<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh Mục - Gift Card</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/food.css') }}">
</head>
<body>
    <!-- Header -->
    <div class="header">
        <a href="/" class="header-back">
            <svg width="24" height="24" fill="none" stroke="#222" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        </a>
        <div class="header-title">Tất cả danh mục</div>
        <div class="header-actions">
        <a href="/filter" class="header-action-btn">
            <button class="header-action-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M5.8335 13.333H10.0002M5.8335 9.99967L14.1668 9.99967M10.0002 6.66634L14.1668 6.66634" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                  </svg>
            </button>
        </a>
            <div class="header-divider"></div>
            <a href="/filter" class="header-action-btn"><svg width="16" height="16" fill="none" stroke="#fff" stroke-width="2"><line x1="4" y1="4" x2="12" y2="12"/><line x1="12" y1="4" x2="4" y2="12"/></svg></a>
        </div>
    </div>
    <!-- Tabs -->
    <div class="category-tabs">
        <a href="/category/all"><button class="category-tab">Tất cả</button></a>
        <a href="/food-category"><button class="category-tab active">Ẩm thực</button></a>
        <button class="category-tab">Du lịch</button>
        <button class="category-tab">Giải trí</button>
        <button class="category-tab">Sức khỏe</button>
        <button class="category-tab">Giáo dục</button>
        <button class="category-tab">Thời trang</button>
        <button class="category-tab">Làm đẹp</button>
        <button class="category-tab">Thẻ nạp điện thoại</button>
    </div>
    <!-- Search bar -->
    <div class="search-bar">
        <input class="search-input" type="text" placeholder="Tìm kiếm...">
        <a href="/filter"><button class="filter-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M2.25 4.5H7.5" stroke="#525252" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.25 9H9" stroke="#525252" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14.25 9H15.75" stroke="#525252" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.5 4.5L15.75 4.5" stroke="#525252" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9.75 13.5L15 13.5" stroke="#525252" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.25 13.5H4.5" stroke="#525252" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="6" cy="13.5" r="1.5" stroke="#525252" stroke-width="1.5"/>
                <circle cx="12.75" cy="9" r="1.5" stroke="#525252" stroke-width="1.5"/>
                <circle cx="9" cy="4.5" r="1.5" stroke="#525252" stroke-width="1.5"/>
              </svg>
        </button></a>
    </div>
    <!-- Product grid -->
    <div class="product-list">
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/starbuck.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/starbuck.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/starbuck.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
        </div>
        <div class="product-grid">
            
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/starbuck.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">MIXUE</span>
                </div>
                <div class="product-title">Sapa City Tour 1 Day với giá chỉ từ 300.000đ</div>
                <div class="product-price">300.000đ</div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/starbuck.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/starbuck.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/home/sucKhoe1.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">khám bệnh với giá chỉ từ 199.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/home/sucKhoe2.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">khám bệnh với giá chỉ từ 199.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/starbuck.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/home/giaoDuc1.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">học tiếng anh với giá chỉ từ 199.000đ</div>
                <div class="product-price">199.000đ</div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/home/giaoDuc2.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">học tiếng anh với giá chỉ từ 199.000đ</div>
                <div class="product-price">199.000đ</div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/starbuck.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/home/thoiTrang1.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/home/thoiTrang2.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/starbuck.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/home/lamDep1.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/home/lamDep2.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/starbuck.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/home/dienThoai1.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/home/dienThoai2.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/image/test/starbuck.svg" alt="">
                    <button class="add-btn">+</button>
                </div>
                <div class="brand-row">
                    <img src="/image/test/starbuck-icon.svg" class="brand-logo" alt="">
                    <span class="brand-name">Starbucks</span>
                </div>
                <div class="product-title">Mua KFC với giá chỉ từ 19.000đ</div>
                <div class="product-price">20.000đ</div>
            </div>
        </div>
    </div>
    <script>
        // Số lượng cho từng sản phẩm
        let quantities = Array(0).fill(0); // Changed to 0 as products are hardcoded now
        document.querySelectorAll('.add-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                // The data-index is not available in the copied HTML, so this part needs adjustment
                // For now, I'm just toggling a class. You might need to implement a more robust cart system.
                btn.classList.toggle('selected');
            });
        });
        // CSS cho trạng thái active
        document.head.insertAdjacentHTML('beforeend', `<style>.add-btn.active {background:#fff;color:#e74c3c;border:2px solid #e74c3c;} .add-btn.active .add-btn-text{font-weight:600;} .add-btn.selected {background: #e74c3c !important; color: #fff !important;}</style>`);

        document.querySelectorAll('.category-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.category-tab').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });
    </script>
    <!-- Bottom bar -->
    <div class="bottom-bar">
        <div class="cart-icon" style="position:relative;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M22 9.48977H17.21L12.83 2.92977C12.64 2.64977 12.32 2.50977 12 2.50977C11.68 2.50977 11.36 2.64977 11.17 2.93977L6.79 9.48977H2C1.45 9.48977 1 9.93977 1 10.4898C1 10.5798 1.01 10.6698 1.04 10.7598L3.58 20.0298C3.81 20.8698 4.58 21.4898 5.5 21.4898H18.5C19.42 21.4898 20.19 20.8698 20.43 20.0298L22.97 10.7598L23 10.4898C23 9.93977 22.55 9.48977 22 9.48977ZM12 5.28977L14.8 9.48977H9.2L12 5.28977ZM18.5 19.4898L5.51 19.4998L3.31 11.4898H20.7L18.5 19.4898ZM12 13.4898C10.9 13.4898 10 14.3898 10 15.4898C10 16.5898 10.9 17.4898 12 17.4898C13.1 17.4898 14 16.5898 14 15.4898C14 14.3898 13.1 13.4898 12 13.4898Z" fill="#DB3D42"/>
</svg>
            <span class="cart-count" style="position:absolute;top:-6px;right:-6px;background:#e74c3c;color:#fff;font-size:13px;width:18px;height:18px;display:flex;align-items:center;justify-content:center;border-radius:50%;">{{ $cart_count ?? 1 }}</span>
        </div>
        <div style="display:flex;flex-direction:column;align-items:flex-start;flex:1;">
            <span class="purchase-label" style="margin-bottom:0;font-size:13px;color:#888;">Purchase</span>
            <span class="purchase-total" style="font-size:20px;color:#e74c3c;font-weight:700;">{{ number_format($cart_total ?? 1202000000, 0, ',', '.') }} đ</span>
        </div>
        <a href="/voucher"><button class="checkout-btn" style="background:#e74c3c;color:#fff;border:none;border-radius:10px;padding:10px 28px;font-size:16px;font-weight:600;">Thanh toán</button></a>
    </div>
</body>
</html> 