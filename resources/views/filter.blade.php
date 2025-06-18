<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bộ lọc nâng cao</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7fafc;
            font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
        }
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            z-index: 1000;
        }
        .modal-content {
            background-color: #fff;
            border-radius: 0;
            width: 100%;
            max-width: none;
            margin: 0;
            box-shadow: none;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 24px;
            border-bottom: 1px solid #e2e8f0;
            background-color: #f8f8f8;
        }
        .modal-header h2 {
            font-size: 18px;
            font-weight: 600;
            color: #2d3748;
        }
        .modal-header .close-btn {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #718096;
            padding: 0;
            line-height: 1;
        }
        .modal-body {
            padding: 24px;
            overflow-y: auto;
            flex-grow: 1;
        }
        .filter-section {
            margin-bottom: 24px;
        }
        .filter-section-title {
            font-size: 16px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 12px;
        }
        .filter-buttons-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
        }
        .filter-button {
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            background-color: #f7fafc;
            color: #4a5568;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: center;
        }
        .filter-button.active {
            background-color: #fee2e2; /* Light red */
            border-color: #ef4444; /* Red */
            color: #ef4444; /* Red */
            font-weight: 600;
        }
        .filter-button:hover {
            border-color: #cbd5e0;
        }
        .filter-button--pill {
            border-radius: 9999px;
        }
        .price-range-slider {
            width: 100%;
            accent-color: #f97316; /* Orange color */
            background: transparent; /* Make the track background transparent */
        }
        /* Remove default track styles for Webkit browsers (Chrome, Safari) */
        .price-range-slider::-webkit-slider-runnable-track {
            background: transparent;
        }
        /* Remove default track styles for Firefox */
        .price-range-slider::-moz-range-track {
            background: transparent;
        }
        .price-range-info {
            display: flex;
            justify-content: space-between;
            margin-top: 8px;
            font-size: 14px;
            color: #4a5568;
        }
        .modal-footer {
            padding: 16px 24px;
            border-top: 1px solid #e2e8f0;
            display: flex;
            width: 100%;
            justify-content: flex-end;
            gap: 12px;
            background-color: #f8f8f8;
        }
        .reset-button {
            padding: 10px 20px;
            border-radius: 9999px;
            border: 1px solid #cbd5e0;
            background-color: #fff;
            color: #4a5568;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.2s ease;
            font-weight: 600;
        }
        .confirm-button {
            padding: 10px 20px;
            border-radius: 9999px;
            border: none;
            background-color: #ef4444; /* Red */
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.2s ease;
            font-weight: 600;
        }
        .reset-button:hover {
            background-color: #edf2f7;
        }
        .confirm-button:hover {
            background-color: #dc2626; /* Darker red */
        }
        .location-buttons-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .view-more {
            color: #ef4444;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            text-align: right;
            margin-top: 8px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="modal-overlay">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Bộ lọc nâng cao</h2>
                <a href="/" class="close-btn">&times;</a>
            </div>
            <div class="modal-body">
                <div class="filter-section">
                    <div class="filter-section-title">Danh mục</div>
                    <div class="filter-buttons-grid">
                        <button class="filter-button filter-button--pill active">Tất cả</button>
                        <button class="filter-button filter-button--pill">Độc quyền</button>
                        <button class="filter-button filter-button--pill">Ẩm thực</button>
                        <button class="filter-button filter-button--pill">Di chuyển</button>
                        <button class="filter-button filter-button--pill">Làm đẹp</button>
                        <button class="filter-button filter-button--pill">Viễn thông</button>
                        <button class="filter-button filter-button--pill">Giải trí</button>
                        <button class="filter-button filter-button--pill">Giáo dục</button>
                        <button class="filter-button filter-button--pill">Du lịch</button>
                        <button class="filter-button filter-button--pill">Mua sắm</button>
                        <button class="filter-button filter-button--pill">Sức khỏe</button>
                        <button class="filter-button filter-button--pill">Khách sạn</button>
                    </div>
                </div>

                <div class="filter-section">
                    <a href="/countries"><div class="filter-section-title">Vị trí <span class="view-more">Xem thêm</span></div></a>
                    <div class="filter-buttons-grid location-buttons-grid">
                        <button class="filter-button active">Toàn cầu</button>
                        <button class="filter-button">Việt Nam</button>
                        <button class="filter-button">Thái Lan</button>
                        <button class="filter-button">Mỹ</button>
                    </div>
                </div>

                <div class="filter-section">
                    <div class="filter-section-title">Khoảng giá</div>
                    <select class="filter-button w-full mb-4">
                        <option>United States Dollars ($)</option>
                    </select>
                    <input type="range" min="0" max="200000" value="0" class="price-range-slider" id="priceRange">
                    <div class="price-range-info">
                        <span>$0</span>
                        <span>$200.000+</span>
                    </div>
                </div>

                <div class="filter-section">
                    <div class="filter-section-title">Sắp xếp</div>
                    <div class="filter-buttons-grid">
                        <button class="filter-button active">Đề xuất</button>
                        <button class="filter-button">Mới nhất</button>
                        <button class="filter-button">Giá tiền rẻ nhất</button>
                        <button class="filter-button">Giá điểm rẻ nhất</button>
                        <button class="filter-button">Bán chạy nhất</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="reset-button">Đặt lại</button>
                <button class="confirm-button">Xác nhận</button>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.filter-buttons-grid').forEach(grid => {
            grid.addEventListener('click', function(event) {
                if (event.target.classList.contains('filter-button')) {
                    event.target.classList.toggle('active');
                }
            });
        });

        // Handle closing the modal/navigating back
        document.querySelector('.close-btn').addEventListener('click', function(event) {
            event.preventDefault();
            window.history.back(); // Go back to the previous page
        });

        // Handle reset button click
        document.querySelector('.reset-button').addEventListener('click', function() {
            location.reload(); // Reload the page
        });
    </script>
</body>
</html> 