<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KFC - Các quốc gia áp dụng</title>
    <style>
        body {
            font-family: 'Inter', 'Helvetica Neue', sans-serif;
            background: #fff;
            margin: 0;
            padding: 0;
        }
        .modal {
            width: 100%;
            max-width: 100vw;
            height: 100vh;
            background: #fff;
            position: relative;
            margin: 0;
        }
        .modal-header {
            padding: 18px 16px 0 16px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .modal-title {
            font-size: 18px;
            font-weight: 600;
            color: #222;
        }
        .modal-desc {
            font-size: 13px;
            color: #888;
            margin-top: 2px;
        }
        .close-btn {
            position: absolute;
            right: 16px;
            top: 18px;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }
        .search-box {
            margin: 18px 16px 0 16px;
            width: calc(100% - 32px);
            display: flex;
            align-items: center;
            background: #F5F5F5;
            border-radius: 8px;
            padding: 8px 12px;
            width: auto;
        }
        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            font-size: 15px;
            flex: 1;
            margin-left: 8px;
        }
        .country-list {
            margin: 18px 0 0 0;
            padding: 0 0 24px 0;
            max-height: calc(100vh - 120px);
            overflow-y: auto;
        }
        .country-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 24px;
            cursor: pointer;
            transition: background 0.15s;
        }
        .country-item:hover {
            background: #F5F5F5;
        }
        .country-flag {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            object-fit: cover;
            border: 1px solid #eee;
        }
        .country-name {
            font-size: 15px;
            color: #222;
        }
    </style>
</head>
<body>
    <div class="modal">
        <button class="close-btn" onclick="window.history.back()">&times;</button>
        <div class="modal-header">
            <span class="modal-title">KFC</span>
            <span class="modal-desc">Các quốc gia áp dụng</span>
        </div>
        <div class="search-box">
            <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.5 15.5a7 7 0 1 0 0-14 7 7 0 0 0 0 14Zm5.5-1 3.5 3.5" stroke="#888" stroke-width="1.5" stroke-linecap="round"/></svg>
            <input type="text" placeholder="Search your country" />
        </div>
        <div class="country-list">
            <div class="country-item"><img class="country-flag" src="/image/test/detail/vn.svg"><span class="country-name">Việt Nam</span></div>
            <div class="country-item"><img class="country-flag" src="/image/test/detail/gb.svg"><span class="country-name">English</span></div>
            <div class="country-item"><img class="country-flag" src="/image/test/detail/kr.svg"><span class="country-name">Korea</span></div>
            <div class="country-item"><img class="country-flag" src="/image/test/detail/jp.svg"><span class="country-name">Japan</span></div>
            <div class="country-item"><img class="country-flag" src="/image/test/detail/th.svg"><span class="country-name">ThaiLand</span></div>
            <div class="country-item"><img class="country-flag" src="/image/test/detail/id.svg"><span class="country-name">Indonesia</span></div>
            <div class="country-item"><img class="country-flag" src="/image/test/detail/si.svg"><span class="country-name">Singapor</span></div>
            <div class="country-item"><img class="country-flag" src="/image/test/detail/fr.svg"><span class="country-name">Français</span></div>
            <div class="country-item"><img class="country-flag" src="/image/test/detail/nl.svg"><span class="country-name">Nederlands</span></div>
            <div class="country-item"><img class="country-flag" src="/image/test/detail/il.svg"><span class="country-name">Ελληνικά</span></div>
            <div class="country-item"><img class="country-flag" src="/image/test/detail/tr.svg"><span class="country-name">Turk</span></div>
            <div class="country-item"><img class="country-flag" src="/image/test/detail/cn.svg"><span class="country-name">China</span></div>
        </div>
    </div>
</body>
</html> 