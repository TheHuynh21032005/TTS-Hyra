<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucher App</title>
    <link rel="stylesheet" href="{{ asset('css/voucher.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            {{-- <div class="header-rose"></div> --}}
        </div>
        <div class="nav-bar">
            <div class="nav-left">
                <div class="nav-button">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M10 8L6 12M6 12L10 16M6 12L18 12" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="nav-search">
                    <div class="search-icon">
                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M5.8335 13.333H10.0002M5.8335 9.99967L14.1668 9.99967M10.0002 6.66634L14.1668 6.66634" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="search-divider"></div>
                    <div class="search-icon-rotate">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M6.4644 13.5359L13.5355 6.46484M13.5354 13.5359L6.46436 6.46484" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="voucher-card">
            <div class="voucher-header">
                <div class="voucher-brand">
                    <div class="brand-icon">
                        <img src="/image/test/detail/kfc.svg" alt="Brand Logo">
                    </div>
                    <span class="brand-name">KFC</span>
                </div>
                <div class="voucher-title">
                    <span class="voucher-text">
                        🔥 <span class="voucher-text-bold">Voucher hot giảm 40k cho hóa đơn từ 120k chỉ trong hôm nay</span> 🔥 <span class="voucher-text-bold">[KFC]</span>
                    </span>
                </div>
            </div>
            <div class="voucher-price">
                <span class="price-text">20.000đ</span>
            </div>
            <div class="voucher-tron-gop">
                <div style="display:flex; align-items:center; width:100%; margin:12px 0 8px 0; margin-left: -27px">
                    <div style="width:24px; height:24px; flex-shrink:0; display:flex; align-items:center; justify-content:center;">
                        <svg width="24" height="24" viewBox="0 0 24 24"><circle cx="12" cy="12" r="12" fill="#F2F2F2"/></svg>
                    </div>
                    <div style="flex:1; border-bottom:1.5px dashed #D9D9D9; height:0; margin:0 4px;"></div>
                    <div style="width:24px; height:24px; flex-shrink:0; display:flex; align-items:center; justify-content:center; margin-right: -55px;">
                        <svg width="24" height="24" viewBox="0 0 24 24"><circle cx="12" cy="12" r="12" fill="#F2F2F2"/></svg>
                    </div>
                </div>
            </div>
            <div class="voucher-countries" style="display:flex; align-items:center; gap:10px; margin-top:8px;">
                <span class="countries-text" style="color:#888; font-size:15px;">Quốc gia áp dụng: <span style="color:#E74C3C; font-weight:500;">123 quốc gia</span></span>
                <div style="display:flex; align-items:center; gap:0; margin-left:8px;">
                    <img src="/image/test/detail/vn.svg" style="width:28px; height:28px; border-radius:50%; border:2px solid #fff; box-shadow:0 1px 4px rgba(0,0,0,0.08); margin-left:-8px; background:#fff;">
                    <img src="/image/test/detail/kr.svg" style="width:28px; height:28px; border-radius:50%; border:2px solid #fff; box-shadow:0 1px 4px rgba(0,0,0,0.08); margin-left:-8px; background:#fff;">
                    <img src="/image/test/detail/jp.svg" style="width:28px; height:28px; border-radius:50%; border:2px solid #fff; box-shadow:0 1px 4px rgba(0,0,0,0.08); margin-left:-8px; background:#fff;">
                    <a href="{{ route('countries') }}" style="width:28px; height:28px; border-radius:50%; background:#F5F5F5; display:flex; align-items:center; justify-content:center; font-size:13px; color:#888; font-weight:600; margin-left:-8px; border:2px solid #fff; text-decoration:none;">+99</a>
                </div>
            </div>
            <button class="add-to-cart" id="addToCartBtn">Thêm vào giỏ hàng</button>
        </div>
        <div class="tabs-section">
            <div class="tabs">
                <div class="tab">Điều khoản</div>
                <div class="tab tab-active">Hướng dẫn</div>
                <div class="tab">Mô tả</div>
            </div>
            <div style="flex:1; border-bottom:1.5px solid #D9D9D9; height:0; margin:0 4px;"></div>
            <div class="tab-content">
                <div class="tab-content-header">
                    <span class="tab-content-title">Hướng dẫn sử dụng</span>
                    <span class="tab-content-desc">Thanh toán dịch vụ online bằng mã code trên website hoặc ứng dụng của nhãn hiệu</span>
                </div>
                <div class="tab-content-steps" style="position:relative; display:flex; flex-direction:column; gap:24px; margin-top:12px;">
                    <div style="position:absolute; left:20px; top:32px; bottom:32px; width:2px; background:#E5E5E5; z-index:0;"></div>
                    <div style="display:flex; align-items:flex-start; gap:16px; position:relative; z-index:1;">
                        <div style="width:40px; height:40px; border-radius:50%; background:#F3F6FF; display:flex; align-items:center; justify-content:center;">
                            <img src="/image/test/detail/qua.svg" alt="Bước 1" style="width:28px; height:28px;">
                        </div>
                        <div style="flex:1; color:#222; font-size:15px; line-height:1.6;">
                            <b>Bước 1:</b> Chọn voucher ưu đãi muốn sử dụng, ấn <b>"Sử dụng ngay"</b> để xem chi tiết mã Code giảm giá
                        </div>
                    </div>
                    <div style="display:flex; align-items:flex-start; gap:16px; position:relative; z-index:1;">
                        <div style="width:40px; height:40px; border-radius:50%; background:#FFF6F6; display:flex; align-items:center; justify-content:center;">
                            <img src="/image/test/detail/ma.svg" alt="Bước 2" style="width:28px; height:28px;">
                        </div>
                        <div style="flex:1; color:#222; font-size:15px; line-height:1.6;">
                            <b>Bước 2:</b> Chọn <b>Sao chép</b> mã khuyến mãi
                        </div>
                    </div>
                    <div style="display:flex; align-items:flex-start; gap:16px; position:relative; z-index:1;">
                        <div style="width:40px; height:40px; border-radius:50%; background:#F3F6FF; display:flex; align-items:center; justify-content:center;">
                            <img src="/image/test/detail/vo.svg" alt="Bước 3" style="width:28px; height:28px;">
                        </div>
                        <div style="flex:1; color:#222; font-size:15px; line-height:1.6;">
                            <b>Bước 3:</b> Dán mã tại trang thanh toán trên website hoặc ứng dụng của nhãn hàng/thương hiệu để <b>áp dụng ưu đãi</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="bottom-bar-content">
                <div class="cart-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M22 9.48977H17.21L12.83 2.92977C12.64 2.64977 12.32 2.50977 12 2.50977C11.68 2.50977 11.36 2.64977 11.17 2.93977L6.79 9.48977H2C1.45 9.48977 1 9.93977 1 10.4898C1 10.5798 1.01 10.6698 1.04 10.7598L3.58 20.0298C3.81 20.8698 4.58 21.4898 5.5 21.4898H18.5C19.42 21.4898 20.19 20.8698 20.43 20.0298L22.97 10.7598L23 10.4898C23 9.93977 22.55 9.48977 22 9.48977ZM12 5.28977L14.8 9.48977H9.2L12 5.28977ZM18.5 19.4898L5.51 19.4998L3.31 11.4898H20.7L18.5 19.4898ZM12 13.4898C10.9 13.4898 10 14.3898 10 15.4898C10 16.5898 10.9 17.4898 12 17.4898C13.1 17.4898 14 16.5898 14 15.4898C14 14.3898 13.1 13.4898 12 13.4898Z" fill="#DB3D42"/>
                      </svg>
                    <span class="cart-badge">1</span>
                </div>
                <div class="purchase-info">
                    <div class="purchase-text">
                        <span class="purchase-label">Purchase</span>
                        <div class="purchase-amount">
                            <span class="purchase-amount-text">1.00.202.000.000</span>
                            <img class="purchase-amount-icon" src="/image/test/coin.svg" alt="Currency">
                        </div>
                    </div>
                    <button class="pay-button" id="payButton">
                        <span class="pay-button-text">Thanh toán</span>
                    </button>
                </div>
            </div>
            <div class="home-indicator">
                <div class="home-indicator-bar"></div>
            </div>
        </div>
    </div>
    <!-- Cart Modal (hidden by default) -->
    <div id="cartModal" class="cart-modal" style="display:none;">
        <div class="cart-modal-overlay"></div>
        <div class="cart-modal-content">
            <div class="cart-modal-header">
                <span class="cart-modal-title">Giỏ hàng</span>
                <button class="cart-modal-close" id="closeCartModal">&times;</button>
            </div>
            <div class="cart-modal-list" id="cartList">
                <!-- Cart items -->
                <div class="cart-swipe-item">
                    <div class="cart-item-swipe">
                        <div class="cart-item-main">
                            <img src="/image/test/detail/kfc.svg" class="cart-item-img">
                            <div class="cart-item-info">
                                <div class="cart-item-brand">Starbucks <span class="cart-item-qty">x1</span></div>
                                <div class="cart-item-title">Voucher mua KFC với giá 19.000đ</div>
                                <div class="cart-item-prices">
                                    <span class="cart-item-price">Price: 30.000đ</span>
                                    <span class="cart-item-purchase">Purchase: <span style="color:#DB3D42; font-weight:600;">200.000 <img src='/image/test/coin.svg' style='width:16px;vertical-align:middle;'></span></span>
                                </div>
                            </div>
                        </div>
                        <button class="cart-item-remove">Xóa</button>
                    </div>
                </div>
                <div class="cart-swipe-item">
                    <div class="cart-item-swipe">
                        <div class="cart-item-main">
                            <img src="/image/test/detail/kfc.svg" class="cart-item-img">
                            <div class="cart-item-info">
                                <div class="cart-item-brand">Starbucks <span class="cart-item-qty">x1</span></div>
                                <div class="cart-item-title">Voucher mua KFC với giá 19.000đ</div>
                                <div class="cart-item-prices">
                                    <span class="cart-item-price">Price: 30.000đ</span>
                                    <span class="cart-item-purchase">Purchase: <span style="color:#DB3D42; font-weight:600;">200.000 <img src='/image/test/coin.svg' style='width:16px;vertical-align:middle;'></span></span>
                                </div>
                            </div>
                        </div>
                        <button class="cart-item-remove">Xóa</button>
                    </div>
                </div>
                <div class="cart-swipe-item">
                    <div class="cart-item-swipe">
                        <div class="cart-item-main">
                            <img src="/image/test/detail/kfc.svg" class="cart-item-img">
                            <div class="cart-item-info">
                                <div class="cart-item-brand">McDonald's <span class="cart-item-qty">x2</span></div>
                                <div class="cart-item-title">Giảm giá 10% cho combo burger</div>
                                <div class="cart-item-prices">
                                    <span class="cart-item-price">Price: 50.000đ</span>
                                    <span class="cart-item-purchase">Purchase: <span style="color:#DB3D42; font-weight:600;">300.000 <img src='/image/test/coin.svg' style='width:16px;vertical-align:middle;'></span></span>
                                </div>
                            </div>
                        </div>
                        <button class="cart-item-remove">Xóa</button>
                    </div>
                </div>
                <div class="cart-swipe-item">
                    <div class="cart-item-swipe">
                        <div class="cart-item-main">
                            <img src="/image/test/detail/kfc.svg" class="cart-item-img">
                            <div class="cart-item-info">
                                <div class="cart-item-brand">Pizza Hut <span class="cart-item-qty">x3</span></div>
                                <div class="cart-item-title">Mua 1 tặng 1 cho pizza lớn</div>
                                <div class="cart-item-prices">
                                    <span class="cart-item-price">Price: 199.000đ</span>
                                    <span class="cart-item-purchase">Purchase: <span style="color:#DB3D42; font-weight:600;">500.000 <img src='/image/test/coin.svg' style='width:16px;vertical-align:middle;'></span></span>
                                </div>
                            </div>
                        </div>
                        <button class="cart-item-remove">Xóa</button>
                    </div>
                </div>
            </div>
            <div class="cart-modal-footer-fixed">
                <div class="cart-modal-footer-inner">
                    <div class="cart-modal-total">
                        <span>Purchase</span>
                        <span class="cart-modal-total-amount">1.000.000 <img src='/image/test/coin.svg' style='width:18px;vertical-align:middle;'></span>
                    </div>
                    <button class="cart-modal-pay">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>
    <script>
    // Swipe to delete logic
    function enableSwipeToDelete() {
        const items = document.querySelectorAll('.cart-swipe-item');
        items.forEach(item => {
            const swipe = item.querySelector('.cart-item-swipe');
            const removeBtn = item.querySelector('.cart-item-remove');
            
            // Click to show/hide delete button
            swipe.addEventListener('click', function(e) {
                // Don't trigger if clicking the remove button
                if (e.target === removeBtn) return;
                
                // Remove active class from all other items
                document.querySelectorAll('.cart-item-swipe').forEach(s => {
                    if (s !== swipe) s.classList.remove('active');
                });
                
                // Toggle active class on clicked item
                swipe.classList.toggle('active');
            });

            // Remove item
            removeBtn.addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent click from bubbling to parent
                item.remove();
                updateCartTotal();
            });
        });
    }
    function updateCartTotal() {
        // Demo: tính lại tổng tiền (có thể lấy từ data thực tế)
        let total = 0;
        document.querySelectorAll('.cart-swipe-item').forEach(item => {
            const price = item.querySelector('.cart-item-purchase');
            if (price) {
                let val = price.textContent.replace(/[^\d]/g, '');
                total += parseInt(val || '0', 10);
            }
        });
        document.querySelector('.cart-modal-total-amount').innerHTML = total.toLocaleString() + " <img src='/image/test/coin.svg' style='width:18px;vertical-align:middle;'>";
    }
    document.addEventListener('DOMContentLoaded', function() {
        enableSwipeToDelete();
        updateCartTotal();
        var addToCartBtn = document.getElementById('addToCartBtn');
        var cartModal = document.getElementById('cartModal');
        var closeCartModal = document.getElementById('closeCartModal');
        var payButton = document.getElementById('payButton');
        var cartIcon = document.querySelector('.cart-icon');
        
        function showCartModal() {
            cartModal.style.display = 'flex';
            setTimeout(() => {
                cartModal.classList.add('show');
            }, 10);
        }

        function hideCartModal() {
            cartModal.classList.remove('show');
            setTimeout(() => {
                cartModal.style.display = 'none';
            }, 300);
        }
        
        if (addToCartBtn) {
            addToCartBtn.addEventListener('click', function() {
                addToCartBtn.textContent = 'Đã thêm vào giỏ hàng';
                addToCartBtn.classList.add('added-to-cart');
                addToCartBtn.disabled = true;
                
                showCartModal();

                // Update cart badge with animation
                const badge = document.querySelector('.cart-badge');
                if (badge) {
                    badge.classList.add('update');
                    setTimeout(() => badge.classList.remove('update'), 500);
                }
            });
        }

        if (payButton) {
            payButton.addEventListener('click', showCartModal);
        }

        if (cartIcon) {
            cartIcon.addEventListener('click', showCartModal);
        }

        if (closeCartModal) {
            closeCartModal.addEventListener('click', hideCartModal);
        }

        var overlay = document.querySelector('.cart-modal-overlay');
        if (overlay) {
            overlay.addEventListener('click', hideCartModal);
        }
    });
    </script>
</body>
</html>