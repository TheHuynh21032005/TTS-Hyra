<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Gift Card UI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
            background: #ffffff;
            min-height: 100vh;
            line-height: 1.5;
            color: #1f2937;
            overflow-x: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 384px;
            height: 3141px;
            background: #ffffff;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .blur-circle-1 {
            width: 176px;
            height: 176px;
            position: absolute;
            left: 98px;
            top: 236px;
            background: #f43f5e;
            border-radius: 50%;
            filter: blur(150px);
        }

        .blur-circle-2 {
            width: 176px;
            height: 176px;
            position: absolute;
            left: 403px;
            top: 402px;
            background: #f472b6;
            border-radius: 50%;
            filter: blur(150px);
        }

        .header {
            width: 384px;
            height: 192px;
            position: absolute;
            top: 0.5px;
            border-bottom-left-radius: 32px;
            border-bottom-right-radius: 32px;
            overflow: hidden;
        }

        .header-bg {
            width: 807px;
            height: 240px;
            background: #fecdd3;
            position: absolute;
            top: 0;
            left: 0;
        }

        .header-blur {
            width: 711px;
            height: 288px;
            background: #ffffff;
            position: absolute;
            top: -91px;
            left: -5px;
            filter: blur(120px);
        }

        .top-bar {
            width: 384px;
            position: absolute;
            top: 0;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .status-bar {
            width: 100%;
            height: 44px;
            position: relative;
            overflow: hidden;
        }

        .status-time {
            width: 56px;
            height: 20px;
            position: absolute;
            left: 16px;
            top: 11px;
            font-size: 16px;
            font-weight: 500;
            color: #000000;
            text-align: center;
        }

        .status-battery {
            width: 28px;
            height: 12px;
            position: absolute;
            left: 331px;
            top: 16px;
        }

        .battery-frame {
            width: 24px;
            height: 12px;
            position: absolute;
            border: 1px solid #000000;
            opacity: 0.3;
            border-radius: 2px;
        }

        .battery-level {
            width: 20px;
            height: 8px;
            position: absolute;
            left: 2px;
            top: 2px;
            background: #000000;
            border-radius: 1px;
        }

        .battery-tip {
            width: 1.4px;
            height: 4px;
            position: absolute;
            left: 26px;
            top: 5px;
            background: #000000;
            opacity: 0.4;
        }

        .status-signal {
            width: 16px;
            height: 12px;
            position: absolute;
            left: 281px;
            top: 17px;
            background: #000000;
        }

        .title-bar {
            width: 100%;
            height: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .title-text {
            flex: 1;
            padding: 10px 16px;
            font-size: 14px;
            font-weight: 500;
            color: #1f2937;
            margin-top: 60px;
        }

        .title-actions {
            padding: 2px 6px;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(2px);
            display: flex;
            align-items: center;
            gap: 4px;
            margin-top: 60px;
            margin-right: 17px;
            

        }

        .title-action-icon {
            width: 20px;
            height: 20px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .title-action-icon svg {
            width: 12px;
            height: 12px;
        }

        .title-action-divider {
            width: 1px;
            height: 14px;
            background: rgba(255, 255, 255, 0.4);
        }

        .search-bar {
            width: 394px;
            padding: 8px 16px;
            display: flex;
            margin-top: 30px;
        }

        .search-input {
            width: 100%;
            padding: 10px 12px;
            background: #f9fafb;
            border-radius: 999px;
            box-shadow: 0 0.93px 1.85px rgba(10, 13, 18, 0.05);
            border: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .search-icon {
            width: 20px;
            height: 20px;
            position: relative;
        }

        .search-icon img {
            width: 16px;
            height: 16px;
            position: absolute;
            left: 1.67px;
            top: 1.67px;
        }

        .search-placeholder {
            flex: 1;
            font-size: 14px;
            font-weight: 400;
            color: #9ca3af;
        }

        .category-bar {
            width: auto;
            height: auto;
            padding: 16px;
            position: absolute;
            top: 140px;
            left: 16px;
            background: #ffffff;
            border-radius: 16px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
        }

        .category-list {
            width: 100%;
            display: flex;
            gap: 12px;
            overflow-x: auto;
            opacity: 0.8;
        }

        .category-item {
            width: 56px;
            min-width: 56px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            cursor: pointer;
        }

        .category-item.active .category-label {
            color: #ef4444;
            font-weight: 600;
        }

        .category-icon {
            width: 32px;
            height: 32px;
            position: relative;
            overflow: hidden;
        }

        .category-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .category-label {
            font-size: 12px;
            font-weight: 400;
            color: #1f2937;
            text-align: center;
        }

        .category-dots {
            display: flex;
            gap: 2px;
            position: relative;
            justify-content: center;
        }

        .category-dot-active {
            width: 24px;
            height: 4px;
            /* background: #ef4444; */
            border-radius: 999px;
            position: absolute;
            left: -2px;
            top: 0;
        }

        .category-dot-inactive {
            width: 24px;
            height: 4px;
            background: #ef4444;
            border-radius: 999px;
        }

        .banner {
            width: 394px;
            position: absolute;
            top: 250px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            overflow: hidden;
            padding: 0 16px;
        }

        .banner-container {
            width: auto;
            height: 176px;
            position: relative;
            overflow: hidden;
            z-index: 3;
            border-radius: 16px;
        }

        .banner-slider {
            width: 300%;
            height: 100%;
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .banner-img {
            width: 33.333%;
            height: 100%;
            flex-shrink: 0;
            border-radius: 16px;
            object-fit: cover;
        }

        .banner-img.active {
            opacity: 1;
        }

        .banner-dots {
            position: absolute;
            bottom: 8px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 2;
        }

        .dot-active {
            width: 14px;
            height: 4px;
            background: #ef4444;
            border-radius: 999px;
        }

        .dot-inactive {
            width: 4px;
            height: 4px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            backdrop-filter: blur(2px);
        }

        .section {
            width: 100%;
            padding: 16px 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
            position: relative;
            top: 450px;
        }

        .section-header {
            width: 384px;
            padding: 0 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section-icon {
            width: 24px;
            height: 24px;
            position: relative;
            overflow: hidden;
        }

        .section-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .section-title {
            flex: 1;
            font-size: 16px;
            font-weight: 600;
            color: #1f2937;
        }

        .section-view-all {
            font-size: 12px;
            font-weight: 500;
            color: #ef4444;
            text-decoration: none;
        }

        .section-view-all:hover {
            color: #dc2626;
        }

        .card-list {
            width: 100%;
            padding: 0 16px;
            display: flex;
            gap: 16px;
            overflow-x: auto;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none; /* IE and Edge */
            padding-bottom: 8px;
        }
        .card-list::-webkit-scrollbar {
            display: none; /* Chrome, Safari và Opera */
        }

        .card {
            width: 160px;
            height: 256px;
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            flex: 0 0 auto;
        }

        .card-img-container {
            width: 100%;
            height: 160px;
            position: relative;
            border-radius: 8px;
            overflow: hidden;
        }

        .card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-icon {
            position: absolute;
            bottom: 8px;
            right: 8px;
            width: 28px;
            height: 28px;
            background: #ef4444;
            border-radius: 999px;
            box-shadow: 0 0 8px 4px rgba(0, 0, 0, 0.12);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            font-size: 20px;
            cursor: pointer;
            line-height: 1;
            padding-bottom:5px;
        }

        .card-icon:hover {
            background: #dc2626;
        }

        .card-content {
            width: 100%;
            padding: 8px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .card-brand {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .card-brand-img {
            width: 16px;
            height: 16px;
            border-radius: 50%;
        }

        .card-brand-name {
            font-size: 12px;
            font-weight: 500;
            color: #6b7280;
        }

        .card-title {
            font-size: 12px;
            font-weight: 500;
            color: #1f2937;
            height: 36px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card-price {
            font-size: 12px;
            font-weight: 600;
            color: #ef4444;
        }

        .bottom-bar {
            width: 320px;
            padding: 6px;
            position: fixed;
            bottom: 96px;
            left: 50%;
            transform: translateX(-50%);
            background: #fff5f5;
            border-radius: 12px;
            border: 1px solid rgba(239, 68, 68, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(231, 76, 60, 0.08);
            z-index: 1100;
        }

        .bottom-bar-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .bottom-bar-icon {
            padding: 6px;
            background: #ffffff;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bottom-bar-icon svg {
            width: 20px;
            height: 20px;
        }

        .bottom-bar-text {
            font-size: 12px;
            font-weight: 500;
            color: #1f2937;
        }

        .bottom-bar-right {
            padding: 8px 12px;
            background: #ef4444;
            border-radius: 6px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .bottom-bar-right-text {
            font-size: 12px;
            font-weight: 500;
            color: #ffffff;
        }

        .bottom-bar-right-img {
            width: 16px;
            height: 16px;
        }

        .bottom-nav {
            width: 384px;
            position: fixed;
            bottom: 0;
            background: #ffffff;
            box-shadow: 0 0 8px rgba(177, 176, 192, 0.15);
            display: flex;
            flex-direction: column;
            z-index: 1000;
        }

        .navbar-items {
            width: 100%;
            padding: 8px 16px;
            display: flex;
            justify-content: space-between;
        }

        .navbar-item {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            cursor: pointer;
        }

        .navbar-item.active .navbar-icon svg path,
        .navbar-item.active .navbar-icon svg ellipse,
        .navbar-item.active .navbar-icon svg circle {
            fill: #ef4444;
            stroke: #ef4444;
        }

        .navbar-item.active .navbar-label {
            color: #ef4444;
        }

        .navbar-icon {
            width: 24px;
            height: 24px;
            position: relative;
            overflow: hidden;
        }

        .navbar-icon svg {
            width: 100%;
            height: 100%;
        }

        .navbar-label {
            font-size: 12px;
            font-weight: 500;
            color: #9ca3af;
            text-align: center;
        }

        .navbar-notch {
            width: 144px;
            height: 5px;
            border-radius: 100px;
            position: absolute;
            left: 120px;
            top: 26px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="blur-circle-1"></div>
        <div class="blur-circle-2"></div>
        <div class="header">
            <div class="header-bg"></div>
            <div class="header-blur"></div>
        </div>
        <div class="top-bar">
            <div class="title-bar">
                <div class="title-text">Gift Card</div>
                <div class="title-actions">
                    <div class="title-action-icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <rect x="4" y="7" width="14" height="2" rx="1" fill="#fff"/>
                            <rect x="4" y="11" width="10" height="2" rx="1" fill="#fff"/>
                        </svg>
                    </div>
                    <div class="title-action-divider"></div>
                    <div class="title-action-icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <line x1="6" y1="6" x2="16" y2="16" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                            <line x1="16" y1="6" x2="6" y2="16" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="search-bar">
                <div class="search-input">
                    <div class="search-icon">
                        <img src="/image/test/timKiem.svg" alt="Search Icon">
                    </div>
                    <div class="search-placeholder">Search voucher, brand,...</div>
                </div>
            </div>
        </div>
        <div class="category-bar">
            <div class="category-list">
                <div class="category-item active">
                    <a href="/category/all" style="text-decoration: none; color: inherit;">
                        <div class="category-icon">
                            <img src="/image/test/tatCa.svg" alt="All">
                        </div>
                        <div class="category-label">Tất cả</div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="/food-category" style="text-decoration: none; color: inherit;">
                        <div class="category-icon">
                            <img src="/image/test/coffee.svg" alt="Food">
                        </div>
                        <div class="category-label">Ẩm thực</div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="/category/travel" style="text-decoration: none; color: inherit;">
                        <div class="category-icon">
                            <img src="/image/test/amThuc.svg" alt="Travel">
                        </div>
                        <div class="category-label">Du lịch</div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="/category/entertainment" style="text-decoration: none; color: inherit;">
                        <div class="category-icon">
                            <img src="/image/test/giaiTri.svg" alt="Entertainment">
                        </div>
                        <div class="category-label">Giải trí</div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="/category/health" style="text-decoration: none; color: inherit;">
                        <div class="category-icon">
                            <img src="/image/test/sucKhoe.svg" alt="Health">
                        </div>
                        <div class="category-label">Sức khỏe</div>
                    </a>
                </div>
            </div>
            <div class="category-dots">
                <div class="category-dot-active"></div>
                <div class="category-dot-inactive"></div>
            </div>
        </div>
        <div class="banner">
            <div class="banner-container">
                <div class="banner-slider">
                    <img class="banner-img active" src="/image/test/banner.svg" alt="Banner" />
                    <img class="banner-img" src="/image/test/starbuck.svg" alt="Banner" />
                    <img class="banner-img" src="/image/test/home/duLich1.svg" alt="Banner" />
                </div>
                <div class="banner-dots">
                    <div class="dot-active"></div>
                    <div class="dot-inactive"></div>
                    <div class="dot-inactive"></div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <div class="section-icon">
                    <img src="/image/test/coffee.svg" alt="Food">
                </div>
                <div class="section-title">Ẩm thực</div>
                <a href="/food-category" class="section-view-all">Xem tất cả</a>
            </div>
            <div class="card-list">
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/starbuck.svg" alt="Starbucks" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/starbuck.svg" alt="Starbucks" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/starbuck.svg" alt="Starbucks" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <div class="section-icon">
                    <img src="/image/test/amThuc.svg" alt="Travel">
                </div>
                <div class="section-title">Du lịch</div>
                <a href="#" class="section-view-all">Xem tất cả</a>
            </div>
            <div class="card-list">
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/home/duLich1.svg" alt="Dalat Tour" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Dalat City Tour 1 Day với giá chỉ từ 400.000đ</div>
                        <div class="card-price">400.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/starbuck.svg" alt="Sapa Tour" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="MIXUE Logo" />
                            <div class="card-brand-name">MIXUE</div>
                        </div>
                        <div class="card-title">Sapa City Tour 1 Day với giá chỉ từ 300.000đ</div>
                        <div class="card-price">300.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/starbuck.svg" alt="Starbucks" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <div class="section-icon">
                    <img src="/image/test/giaiTri.svg" alt="Entertainment">
                </div>
                <div class="section-title">Giải trí</div>
                <a href="#" class="section-view-all">Xem tất cả</a>
            </div>
            <div class="card-list">
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/home/giaiTri1.svg" alt="Movie" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/home/giaiTri1.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Xem phim với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/home/giaiTri2.svg" alt="Movie" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/home/giaiTri1.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Xem phim với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/starbuck.svg" alt="Starbucks" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <div class="section-icon">
                    <img src="/image/test/sucKhoe.svg" alt="Health">
                </div>
                <div class="section-title">Sức khỏe</div>
                <a href="#" class="section-view-all">Xem tất cả</a>
            </div>
            <div class="card-list">
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/home/sucKhoe1.svg" alt="Health Check" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Khám bệnh với giá chỉ từ 199.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/home/sucKhoe2.svg" alt="Health Check" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Khám bệnh với giá chỉ từ 199.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/starbuck.svg" alt="Starbucks" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <div class="section-icon">
                    <img src="/image/test/giaoDuc.svg" alt="Education">
                </div>
                <div class="section-title">Giáo Dục</div>
                <a href="#" class="section-view-all">Xem tất cả</a>
            </div>
            <div class="card-list">
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/home/giaoDuc1.svg" alt="English Course" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Học tiếng anh với giá chỉ từ 199.000đ</div>
                        <div class="card-price">199.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/home/giaoDuc2.svg" alt="English Course" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Học tiếng anh với giá chỉ từ 199.000đ</div>
                        <div class="card-price">199.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/starbuck.svg" alt="Starbucks" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <div class="section-icon">
                    <img src="/image/test/thoiTrang.svg" alt="Fashion">
                </div>
                <div class="section-title">Thời trang</div>
                <a href="#" class="section-view-all">Xem tất cả</a>
            </div>
            <div class="card-list">
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/home/thoiTrang1.svg" alt="Fashion" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/home/thoiTrang2.svg" alt="Fashion" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/starbuck.svg" alt="Starbucks" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <div class="section-icon">
                    <img src="/image/test/lamDep.svg" alt="Beauty">
                </div>
                <div class="section-title">Làm đẹp</div>
                <a href="#" class="section-view-all">Xem tất cả</a>
            </div>
            <div class="card-list">
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/home/lamDep1.svg" alt="Beauty" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/home/lamDep2.svg" alt="Beauty" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/starbuck.svg" alt="Starbucks" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <div class="section-icon">
                    <img src="/image/test/dienThoai.svg" alt="Phone Card">
                </div>
                <div class="section-title">Thẻ nạp điện thoại</div>
                <a href="#" class="section-view-all">Xem tất cả</a>
            </div>
            <div class="card-list">
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/home/dienThoai1.svg" alt="Phone Card" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/home/dienThoai2.svg" alt="Phone Card" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img" src="/image/test/starbuck.svg" alt="Starbucks" />
                        <div class="card-icon">+</div>
                    </div>
                    <div class="card-content">
                        <div class="card-brand">
                            <img class="card-brand-img" src="/image/test/starbuck-icon.svg" alt="Starbucks Logo" />
                            <div class="card-brand-name">Starbucks</div>
                        </div>
                        <div class="card-title">Mua KFC với giá chỉ từ 19.000đ</div>
                        <div class="card-price">20.000đ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-bar">
        <div class="bottom-bar-left">
            <div class="bottom-bar-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path d="M18.833 7.90846H14.8413L11.1913 2.4418C11.033 2.20846 10.7663 2.0918 10.4997 2.0918C10.233 2.0918 9.96634 2.20846 9.80801 2.45013L6.15801 7.90846H2.16634C1.70801 7.90846 1.33301 8.28346 1.33301 8.7418C1.33301 8.8168 1.34134 8.8918 1.36634 8.9668L3.48301 16.6918C3.67467 17.3918 4.31634 17.9085 5.08301 17.9085H15.9163C16.683 17.9085 17.3247 17.3918 17.5247 16.6918L19.6413 8.9668L19.6663 8.7418C19.6663 8.28346 19.2913 7.90846 18.833 7.90846ZM10.4997 4.40846L12.833 7.90846H8.16634L10.4997 4.40846ZM15.9163 16.2418L5.09134 16.2501L3.25801 9.57513H17.7497L15.9163 16.2418ZM10.4997 11.2418C9.58301 11.2418 8.83301 11.9918 8.83301 12.9085C8.83301 13.8251 9.58301 14.5751 10.4997 14.5751C11.4163 14.5751 12.1663 13.8251 12.1663 12.9085C12.1663 11.9918 11.4163 11.2418 10.4997 11.2418Z" fill="#DB3D42"/>
                </svg>
            </div>
            <div class="bottom-bar-text">4 sản phẩm</div>
        </div>
        <div class="bottom-bar-right">
            <div class="bottom-bar-right-text">20.000</div>
            <img class="bottom-bar-right-img" src="/image/test/coin.svg" alt="Coin Icon" />
        </div>
    </div>
    <div class="bottom-nav">
        <div class="navbar-items">
            <div class="navbar-item active">
                <div class="navbar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.667 10.1503V17.9668C21.667 20.1943 19.8761 22 17.667 22H7.66699C5.45785 22 3.66699 20.1943 3.66699 17.9668V10.1503C3.66699 8.93937 4.20664 7.7925 5.13685 7.02652L10.1369 2.90935C11.6093 1.69689 13.7247 1.69688 15.1971 2.90935L20.1971 7.02652C21.1273 7.7925 21.667 8.93937 21.667 10.1503ZM10.667 17.25C10.2528 17.25 9.91699 17.5858 9.91699 18C9.91699 18.4142 10.2528 18.75 10.667 18.75H14.667C15.0812 18.75 15.417 18.4142 15.417 18C15.417 17.5858 15.0812 17.25 14.667 17.25H10.667Z" fill="#DB3D42"/>
                    </svg>
                </div>
                <div class="navbar-label">Trang chủ</div>
            </div>
            <div class="navbar-item">
                <div class="navbar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M2 17C2 19.2091 3.79086 21 6 21H18C20.2091 21 22 19.2091 22 17V16C22 15.4477 21.54 15.0163 21.0181 14.8356C19.8435 14.4289 19 13.313 19 12C19 10.687 19.8435 9.57105 21.0181 9.16437C21.54 8.98368 22 8.55228 22 8V7C22 4.79086 20.2091 3 18 3H6C3.79086 3 2 4.79086 2 7V8C2 8.55228 2.46 8.98368 2.98189 9.16437C4.15653 9.57105 5 10.687 5 12C5 13.313 4.15653 14.4289 2.98189 14.8356C2.46 15.0163 2 15.4477 2 16V17Z" stroke="#A3A3A3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 9C10 9.55228 9.55228 10 9 10C8.44772 10 8 9.55228 8 9C8 8.44772 8.44772 8 9 8C9.55228 8 10 8.44772 10 9Z" fill="#A3A3A3"/>
                        <path d="M16 15C16 15.5523 15.5523 16 15 16C14.4477 16 14 15.5523 14 15C14 14.4477 14.4477 14 15 14C15.5523 14 16 14.4477 16 15Z" fill="#A3A3A3"/>
                        <path d="M15 9L9 15" stroke="#A3A3A3" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="navbar-label">Voucher của tôi</div>
            </div>
            <div class="navbar-item">
                <div class="navbar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <ellipse cx="12.334" cy="17.5" rx="7" ry="3.5" stroke="#A3A3A3" stroke-width="1.5" stroke-linejoin="round"/>
                        <circle cx="12.334" cy="7" r="4" stroke="#A3A3A3" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="navbar-label">Tài khoản</div>
            </div>
        </div>
        <div class="navbar-notch"></div>
    </div>
    <script>
        document.querySelectorAll('.category-item').forEach(category => {
            category.addEventListener('click', () => {
                document.querySelectorAll('.category-item').forEach(c => c.classList.remove('active'));
                category.classList.add('active');
            });
        });

        // Banner slideshow functionality
        const bannerSlider = document.querySelector('.banner-slider');
        const dots = document.querySelectorAll('.dot-inactive, .dot-active');
        let currentSlide = 0;
        const totalSlides = 3;
        let startX = 0;
        let currentX = 0;
        let isDragging = false;
        let autoSlideInterval;

        function showSlide(index) {
            // Update slider position
            bannerSlider.style.transform = `translateX(-${index * 33.333}%)`;
            
            // Update dots
            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('dot-inactive');
                    dot.classList.add('dot-active');
                } else {
                    dot.classList.remove('dot-active');
                    dot.classList.add('dot-inactive');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
        }

        // Touch events for swipe functionality
        bannerSlider.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            currentX = startX;
            isDragging = true;
            clearInterval(autoSlideInterval);
        });

        bannerSlider.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            
            currentX = e.touches[0].clientX;
            const diff = currentX - startX;
            const offset = (currentSlide * -33.333) + (diff / bannerSlider.offsetWidth * 100);
            
            // Limit the drag range
            if (offset > 0 || offset < -66.666) return;
            
            bannerSlider.style.transform = `translateX(${offset}%)`;
        });

        bannerSlider.addEventListener('touchend', () => {
            if (!isDragging) return;
            
            const diff = currentX - startX;
            const threshold = bannerSlider.offsetWidth * 0.2; // 20% of banner width
            
            if (Math.abs(diff) > threshold) {
                if (diff > 0) {
                    prevSlide();
                } else {
                    nextSlide();
                }
            } else {
                showSlide(currentSlide);
            }
            
            isDragging = false;
            startAutoSlide();
        });

        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 3000);
        }

        // Initialize first slide
        showSlide(0);
        startAutoSlide();
    </script>
</body>
</html>