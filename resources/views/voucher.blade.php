<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucher App</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            background-color: #F5F5F5;
        }

        .container {
            width: 100%;
            height: 100%;
            background-color: #F5F5F5;
            position: relative;
            overflow: hidden;
        }

        .header {
            width: 100%;
            height: 176px;
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden;
            background-image: url('/image/test/detail/Background.svg');
            background-size: cover;
            background-position: center;
            z-index: 0;
        }

        .header-rose {
            width: 112px;
            height: 20px;
            background-color: #D80027; /* D80027 */
            position: absolute;
            top: 12px;
            left: 8px;
        }

        .status-bar {
            width: 100%;
            height: 44px;
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden;
        }

        .time {
            width: 56px;
            height: 20px;
            position: absolute;
            top: 11px;
            left: 16px;
            border-radius: 24px;
            color: #FFFFFF; /* text-white */
            font-size: 16px; /* text-base */
            font-weight: 500; /* font-medium */
            font-family: 'Helvetica Neue';
            line-height: 20px; /* leading-snug */
            text-align: center;
        }

        .battery {
            width: 28px;
            height: 12px;
            position: absolute;
            top: 16px;
            left: 331px;
        }

        .battery-border {
            width: 24px;
            height: 12px;
            border: 1px solid #FFFFFF; /* FFFFFF */
            border-radius: 2px;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0.3;
        }

        .battery-tip {
            width: 1.4px;
            height: 4px;
            background-color: #FFFFFF; /* FFFFFF */
            position: absolute;
            top: 5px;
            left: 26px;
            opacity: 0.4;
        }

        .battery-fill {
            width: 20px;
            height: 8px;
            background-color: #FFFFFF; /* FFFFFF */
            border-radius: 1px;
            position: absolute;
            top: 2px;
            left: 2px;
        }

        .signal {
            width: 16px;
            height: 12px;
            background-color: #FFFFFF; /* FFFFFF */
            position: absolute;
            top: 17px;
            left: 281px;
        }

        .nav-bar {
            width: 100%;
            height: 40px;
            border-bottom: 1px solid #E9E9EB;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .nav-left {
            flex: 1;
            height: 40px;
            padding: 10px 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-button {
            width: 32px;
            height: 32px;
            background-color: rgba(0, 0, 0, 0.3); /* 000000 with opacity */
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 2;
        }

        .nav-icon {
            width: 24px;
            height: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav-icon-inner {
            width: 12px;
            height: 8px;
            border-radius: 1px;
            outline: 1.5px solid #FFFFFF; /* FFFFFF */
            outline-offset: -0.75px;
            position: absolute;
            top: 8px;
            left: 6px;
        }

        .nav-search {
            padding: 2px 6px;
            background-color: rgba(0, 0, 0, 0.3); /* 000000 with opacity */
            border-radius: 50px;
            outline: 1px solid rgba(255, 255, 255, 0.4); /* FFFFFF with opacity */
            outline-offset: -1px;
            backdrop-filter: blur(4px);
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .search-icon {
            width: 20px;
            height: 20px;
            position: relative;
        }

        .search-icon-inner {
            width: 8px;
            height: 6px;
            outline: 1.5px solid #FFFFFF; /* FFFFFF */
            outline-offset: -0.75px;
            position: absolute;
            top: 6.67px;
            left: 5.83px;
        }

        .search-divider {
            width: 1px;
            height: 14px;
            background-color: rgba(255, 255, 255, 0.4); /* FFFFFF with opacity */
        }

        .search-icon-rotate {
            width: 20px;
            height: 20px;
            transform: rotate(90deg);
            position: relative;
            overflow: hidden;
        }

        .search-icon-rotate-inner {
            width: 8px;
            height: 8px;
            border-radius: 1px;
            outline: 1.5px solid #FFFFFF; /* FFFFFF */
            outline-offset: -0.75px;
            position: absolute;
            top: 6.46px;
            left: 6.46px;
        }

        .voucher-card {
            width: auto;
            height: auto;
            width: calc(100% - 32px);
            padding: 16px;
            background-color: #FFFFFF;
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.04);
            position: absolute;
            top: 131px;
            left: 16px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .voucher-header {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .voucher-brand {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .brand-icon {
            width: 16px;
            height: 16px;
            overflow: hidden;
        }

        .brand-name {
            color: #C6C6C6; /* text-neutral-400 */
            font-size: 12px; /* text-xs */
            font-weight: 500; /* font-medium */
            line-height: 12px; /* leading-none */
        }

        .voucher-title {
            display: flex;
            gap: 10px;
        }

        .voucher-text {
            flex: 1;
            color: #141414; /* text-neutral-900 */
            font-size: 14px; /* text-sm */
            line-height: 14px; /* leading-tight */
        }

        .voucher-text-bold {
            font-weight: 600; /* font-semibold */
        }

        .voucher-price {
            display: flex;
            gap: 12px;
        }

        .price-text {
            color: #0052B4; /* text-Text-primary */
            font-size: 12px; /* text-xs */
            font-weight: 600; /* font-semibold */
            line-height: 12px; /* leading-none */
        }

        .divider {
            width: 100%;
            height: 1px;
            border: 1px solid #EEEEEE; /* EEEEEE */
            border-top: 1px dashed #ccc;
            width: 100%;
            margin: 20px 0;
        }

        .voucher-countries {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 8px;
        }

        .countries-text {
            flex: 1;
            color: #888;
            font-size: 15px;
        }

        .countries-text-bold {
            color: #E74C3C;
            font-weight: 500;
        }

        .country-icons {
            display: flex;
            gap: 0;
        }

        .country-icon {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            box-shadow: 0 0 0 1.5px #FFFFFF; /* FFFFFF */
            outline: 1px solid #FFFFFF; /* FFFFFF */
            outline-offset: -1px;
            overflow: hidden;
            position: relative;
        }

        .country-icon-bg {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .country-icon-plus {
            width: 28px;
            height: 28px;
            background-color: #F5F5F5;
            border-radius: 50%;
            box-shadow: 0 0 0 1px #FFFFFF; /* FFFFFF */
            outline: 0.5px solid #C6C6C6; /* C6C6C6 */
            outline-offset: -0.5px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #888;
            font-size: 13px;
            font-weight: 600;
            line-height: 10px;
        }

        .add-to-cart {
            width: auto;
            height: auto;
            min-height: 40px;
            max-height: 40px;
            padding: 14px 12px;
            background-color: #DB3D42; /* Background-Primary-default */
            border-radius: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #FFFFFF; /* text-Text-on-primary */
            font-size: 14px; /* text-sm */
            font-weight: 500; /* font-medium */
            line-height: 20px; /* leading-normal */
            cursor: pointer;
            border: none;
            z-index: 4;
        }

        .tabs-section {
            width: calc(100% - 32px);
            padding-top: 16px;
            background-color: #FFFFFF;
            border-radius: 16px;
            position: absolute;
            top: 377px;
            left: 16px;
            display: flex;
            flex-direction: column;
        }

        .tabs {
            display: flex;
            align-items: center;
            width: auto;
            height: auto;
        }

        .tab {
            width: 112px;
            padding: 8px 10px;
            border-bottom: 1px rgba(20, 20, 20, 0.1); /* 141414 with opacity */
            display: flex;
            justify-content: center;
            align-items: center;
            color: #535861; /* text-Text-neutral-strong */
            font-size: 12px; /* text-xs */
            font-weight: 500; /* font-medium */
            line-height: 12px; /* leading-none */
            cursor: pointer;
        }

        .tab-active {
            border-bottom: 1px solid #DB3D42; /* DB3D42 */
            color: #0052B4; /* text-Text-primary */
        }

        .tab-content {
            width: 100%;
            padding: 20px 20px 16px;
            background-color: #FFFFFF; /* FFFFFF */
            border-radius: 16px;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .tab-content-header {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .tab-content-title {
            color: #141414; /* text-neutral-900 */
            font-size: 14px; /* text-sm */
            font-weight: 600; /* font-semibold */
            line-height: 14px; /* leading-tight */
        }

        .tab-content-desc {
            color: #141414; /* text-neutral-900 */
            font-size: 12px; /* text-xs */
            line-height: 12px; /* leading-none */
        }

        .tab-content-steps {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 24px;
            margin-top: 12px;
        }

        .vertical-line {
            width: 1px;
            height: 128px;
            border: 0.6px solid #EEEEEE; /* EEEEEE */
            border-offset: -0.3px;
            position: absolute;
            top: 15px;
            left: 17px;
            transform: rotate(90deg);
            transform-origin: top left;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .step-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
        }

        .step-text {
            width: 240px;
            color: #141414; /* text-neutral-900 */
            font-size: 12px; /* text-xs */
            line-height: 12px; /* leading-none */
        }

        .step-text-bold {
            font-weight: 600; /* font-semibold */
        }

        .bottom-bar {
            width: 100%;
            position: absolute;
            bottom: 0;
            background-color: #FFFFFF;
            box-shadow: 0 0 8px rgba(177, 176, 192, 0.15);
            display: flex;
            flex-direction: column;
        }

        .bottom-bar-content {
            width: 100%;
            padding: 12px 16px 8px;
            background-color: #FFFFFF; /* FFFFFF */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-icon {
            width: 36px;
            height: 36px;
            background-color: #FFEFEF;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .cart-icon:hover {
            background-color: #FFE0E0;
            transform: scale(1.05);
        }

        .cart-icon:active {
            transform: scale(0.95);
        }

        .cart-icon-inner {
            width: 20px;
            height: 20px;
            background-color: #0052B4; /* Icon-primary */
            position: absolute;
            top: 2.51px;
            left: 1px;
        }

        .cart-badge {
            width: 16px;
            height: 16px;
            background-color: #E30735; /* E30735 */
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #FFFFFF; /* text-white */
            font-size: 10px; /* text-[10px] */
            font-weight: 500; /* font-medium */
            line-height: 10px; /* leading-none */
            position: absolute;
            top: -6px;
            left: 26px;
        }

        .purchase-info {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .purchase-text {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 4px;
        }

        .purchase-label {
            color: #58585A; /* text-Text-neutral-medium */
            font-size: 12px; /* text-xs */
            line-height: 12px; /* leading-none */
        }

        .purchase-amount {
            display: flex;
            align-items: center;
            gap: 2px;
        }

        .purchase-amount-text {
            color: #0052B4; /* text-Text-primary */
            font-size: 14px; /* text-sm */
            font-weight: 600; /* font-semibold */
            line-height: 14px; /* leading-tight */
        }

        .purchase-amount-icon {
            width: 16px;
            height: 16px;
        }

        .pay-button,
        .pay-button:focus,
        .pay-button:active,
        .pay-button:hover {
            border: none !important;
            box-shadow: none !important;
            outline: none !important;
            appearance: none !important;
            background: #DB3D42;
            color: #fff;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            line-height: 14px;
            cursor: pointer;
            padding: 10px 24px;
        }

        .home-indicator {
            width: 100%;
            height: 32px;
            position: relative;
        }

        .home-indicator-bar {
            width: 144px;
            height: 5px;
            background-color: #333333;
            border-radius: 100px;
            position: absolute;
            bottom: 8px;
            left: 50%;
            transform: translateX(-50%);
        }
        .voucher-tron{
            width: 34px;
            height: 34px;
            flex-shrink: 0;
            aspect-ratio: 1/1;
            border-radius: 50%;
        }
        .voucher-tron-gop{
            width-left: 1174px;
            width-right: 1140px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .added-to-cart {
            background: #E9E9E9 !important;
            color: #B0B0B0 !important;
            cursor: not-allowed !important;
            border: none !important;
        }
        .cart-modal {
            position: fixed;
            left: 0; top: 0; right: 0; bottom: 0;
            z-index: 9999;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .cart-modal.show {
            opacity: 1;
            visibility: visible;
        }

        .cart-modal-overlay {
            position: absolute;
            left: 0; top: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.25);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .cart-modal.show .cart-modal-overlay {
            opacity: 1;
        }

        .cart-modal-content {
            position: relative;
            width: 100%;
            max-width: 400px;
            background: #fff;
            border-radius: 24px 24px 0 0;
            box-shadow: 0 0 24px rgba(0,0,0,0.08);
            padding: 0 0 16px 0;
            transform: translateY(100%);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .cart-modal.show .cart-modal-content {
            transform: translateY(0);
        }

        .cart-modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 20px 0 20px;
        }
        .cart-modal-title {
            font-size: 18px;
            font-weight: 600;
            color: #222;
        }
        .cart-modal-close {
            background: none;
            border: none;
            font-size: 28px;
            color: #888;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        .cart-modal-close:hover {
            background: rgba(0,0,0,0.05);
            color: #333;
        }
        .cart-modal-list {
            max-height: 320px;
            overflow-y: auto;
            padding: 8px 0 0 0;
        }
        .cart-item {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            border-bottom: 1px solid #F0F0F0;
            position: relative;
        }
        .cart-item-img {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            margin-right: 12px;
            background: #F5F5F5;
        }
        .cart-item-info {
            flex: 1;
        }
        .cart-item-brand {
            font-size: 13px;
            color: #888;
            margin-bottom: 2px;
        }
        .cart-item-title {
            font-size: 15px;
            color: #222;
            font-weight: 500;
        }
        .cart-item-prices {
            font-size: 13px;
            color: #888;
            margin-top: 2px;
            display: flex;
            gap: 12px;
        }
        .cart-item-remove {
            background: #E74C3C;
            color: #fff;
            border: none;
            border-radius: 0 0 0;
            padding: 0 28px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            min-width: 80px;
            display: none;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 2;
            opacity: 0;
            transform: translateX(20px);
        }

        .cart-item-swipe.active .cart-item-remove {
            display: flex;
            opacity: 1;
            transform: translateX(0);
        }

        .cart-item-swipe:hover .cart-item-remove {
            background: #c0392b;
        }

        .cart-item-img {
            width: 48px;
            height: 48px;
            border-radius: 8px;
            margin-right: 12px;
            background: #F5F5F5;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .cart-item-swipe:hover .cart-item-img {
            transform: scale(1.05);
        }

        .cart-item-title {
            font-size: 15px;
            color: #222;
            font-weight: 500;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            transition: color 0.3s ease;
        }

        .cart-item-swipe:hover .cart-item-title {
            color: #DB3D42;
        }

        .cart-modal-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 20px 0 20px;
        }
        .cart-modal-total {
            font-size: 16px;
            color: #222;
            font-weight: 600;
        }
        .cart-modal-total-amount {
            color: #DB3D42;
            font-weight: 700;
            margin-left: 8px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        .cart-modal.show .cart-modal-total-amount {
            animation: pulse 0.5s ease;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .cart-modal-pay {
            background: #DB3D42;
            color: #fff;
            border: none !important;
            border-radius: 8px;
            padding: 12px 32px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .cart-modal-pay:hover {
            background: #c0392b;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(219, 61, 66, 0.2);
        }
        .cart-modal-pay:active {
            transform: translateY(0);
        }
        .cart-modal-content {
            padding-bottom: 80px;
        }
        .cart-modal-list {
            max-height: 340px;
            overflow-y: auto;
            padding: 8px 0 0 0;
            background: #fff;
        }
        .cart-swipe-item {
            position: relative;
            overflow: hidden;
            margin-bottom: 8px;
        }
        .cart-item-swipe {
            display: flex;
            align-items: stretch;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }
        .cart-item-main {
            display: flex;
            align-items: center;
            flex: 1;
            padding: 12px 16px;
            min-width: 0;
            transition: all 0.3s ease;
        }
        .cart-item-img {
            width: 48px;
            height: 48px;
            border-radius: 8px;
            margin-right: 12px;
            background: #F5F5F5;
            object-fit: cover;
        }
        .cart-item-info {
            flex: 1;
            min-width: 0;
        }
        .cart-item-brand {
            font-size: 13px;
            color: #888;
            margin-bottom: 2px;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        .cart-item-qty {
            color: #B0B0B0;
            font-size: 12px;
            margin-left: 150px;
        }
        .cart-item-prices {
            font-size: 13px;
            height: auto;
            width: 230px;
            color: #888;
            background:  rgba(0, 0, 0, 0.04);
            margin-top: 2px;
            display: flex;
            gap: 12px;
            margin-bottom: -20px; 
        }
        .cart-modal-footer-fixed {
            position: fixed;
            left: 0; right: 0; bottom: 0;
            background: #fff;
            box-shadow: 0 -2px 12px rgba(0,0,0,0.08);
            padding: 0;
            z-index: 10000;
            border-radius: 16px 16px 0 0;
            transform: translateY(100%);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .cart-modal.show .cart-modal-footer-fixed {
            transform: translateY(0);
        }
        .cart-modal-footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 20px 12px 20px;
        }
        .cart-modal-total {
            font-size: 16px;
            color: #222;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .cart-modal-total-amount {
            color: #DB3D42;
            font-weight: 700;
            margin-left: 8px;
            display: flex;
            align-items: center;
        }
        .cart-modal-pay {
            background: #DB3D42;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 12px 32px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }
        /* Swipe effect */
        .cart-swipe-item {
            touch-action: pan-y;
        }
        .cart-item-swipe {
            will-change: transform;
        }
    </style>
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