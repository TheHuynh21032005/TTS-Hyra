<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bộ lọc nâng cao</title>
    <link rel="stylesheet" href="{{ asset('css/filter.css') }}">
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