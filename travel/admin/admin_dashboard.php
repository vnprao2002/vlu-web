<!-- admin_dashboard.php -->

<?php
// Kết nối cơ sở dữ liệu và lấy dữ liệu số vé đặt và số khách từ các file tương ứng
require_once 'booking_chart_data.php';
require_once 'guests_chart_data.php';

// Số bản ghi trên mỗi trang
$recordsPerPage = 10;

// Trang hiện tại (mặc định là trang đầu tiên)
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $currentPage = (int)$_GET['page'];
} else {
    $currentPage = 1;
}

// Tìm kiếm theo tên
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$connection = mysqli_connect('localhost', 'root', '', 'travel_book');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Tổng số bản ghi
$query = "SELECT COUNT(*) AS total FROM book_form WHERE name LIKE '%$search%'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$totalRecords = $row['total'];

// Tính tổng số trang
$totalPages = ceil($totalRecords / $recordsPerPage);

// Xác định bản ghi bắt đầu và kết thúc trên trang hiện tại
$startRecord = ($currentPage - 1) * $recordsPerPage;
$endRecord = $startRecord + $recordsPerPage - 1;

// Truy vấn dữ liệu đặt chỗ với phân trang và tìm kiếm theo tên
$query = "SELECT * FROM book_form WHERE name LIKE '%$search%' LIMIT $startRecord, $recordsPerPage";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query execution failed: " . mysqli_error($connection));
}

// Hàm chia trang
function generatePagination($currentPage, $totalPages)
{
    echo '<ul class="pagination">';
    for ($i = 1; $i <= $totalPages; $i++) {
        echo '<li class="page-item ' . ($currentPage == $i ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
    }
    echo '</ul>';
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS for buttons -->
    <style>
        .edit-btn {
            width: 80px;
        }

        .delete-btn {
            width: 80px;
        }

        #back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            cursor: pointer;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#bookingChart" onclick="scrollToSection('bookingChart')">Biểu đồ số vé đặt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#guestsChart" onclick="scrollToSection('guestsChart')">Biểu đồ số khách</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-4">
    <h2 class="text-center mb-4">Quản lý đặt chỗ</h2>
    <!-- Thêm nút xuất Excel -->
    <div class="text-right mb-3">
        <a href="export.php" class="btn btn-success">Xuất dữ liệu ra Excel</a>
    </div>
    <!-- Form tìm kiếm -->
    <form class="form-inline mb-3" method="get">
        <input type="text" class="form-control mr-2" name="search" placeholder="Tìm kiếm theo tên">
        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
    </form>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Địa điểm</th>
            <th>Số khách</th>
            <th>Ngày đến</th>
            <th>Ngày đi</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['phone']}</td>";
            echo "<td>{$row['address']}</td>";
            echo "<td>{$row['location']}</td>";
            echo "<td>{$row['guests']}</td>";
            echo "<td>{$row['arrivals']}</td>";
            echo "<td>{$row['leaving']}</td>";
            echo "<td>";
            echo "<a href='edit_booking.php?id={$row['id']}' class='btn btn-info btn-sm edit-btn mr-2'>Chỉnh sửa</a>";
            echo "<a href='delete_booking.php?id={$row['id']}' class='btn btn-danger btn-sm delete-btn' onclick='return confirm(\"Bạn có chắc muốn xóa đặt chỗ này?\");'>Xóa</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <!-- Chia trang -->
    <div class="d-flex justify-content-center">
        <?php generatePagination($currentPage, $totalPages); ?>
    </div>
</div>
<div class="container mt-4">
    <h2 class="text-center mb-4">Biểu đồ thống kê số vé đặt trong năm 2023</h2>
    <canvas id="bookingChart" width="400" height="200"></canvas>
</div>
<div class="container mt-4">
    <h2 class="text-center mb-4">Biểu đồ thống kê số khách của mỗi lần đặt vé</h2>
    <canvas id="guestsChart" width="400" height="200"></canvas>
</div>
<!-- Nút di chuyển lên đầu trang -->
<div id="back-to-top">↑</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Lấy dữ liệu số vé đặt từ PHP
    var bookingData = <?php echo json_encode($bookingData); ?>;
    // Chuyển đổi số tháng thành tên tháng để làm nhãn cho biểu đồ
    var monthNames = ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'];
    var bookingLabels = [];
    var bookingDataPoints = [];
    for (var i = 1; i <= 12; i++) {
        bookingLabels.push(monthNames[i - 1]);
        bookingDataPoints.push(bookingData[i] || 0);
    }
    // Vẽ biểu đồ số vé đặt
    var bookingCtx = document.getElementById('bookingChart').getContext('2d');
    var bookingChart = new Chart(bookingCtx, {
        type: 'bar',
        data: {
            labels: bookingLabels,
            datasets: [{
                label: 'Số vé đặt',
                data: bookingDataPoints,
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Lấy dữ liệu số khách từ PHP
    var guestsData = <?php echo json_encode($guestsData); ?>;
    var guestsLabels = [];
    var guestsDataPoints = [];
    for (var guestsCount in guestsData) {
        guestsLabels.push(guestsCount);
        guestsDataPoints.push(guestsData[guestsCount]);
    }

    // Vẽ biểu đồ số khách
    var guestsCtx = document.getElementById('guestsChart').getContext('2d');
    var guestsChart = new Chart(guestsCtx, {
        type: 'bar',
        data: {
            labels: guestsLabels,
            datasets: [{
                label: 'Số khách',
                data: guestsDataPoints,
                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Nút di chuyển lên đầu trang
    var backToTopButton = document.getElementById('back-to-top');
    backToTopButton.addEventListener('click', function () {
        window.scrollTo({top: 0, behavior: 'smooth'});
    });

    // Hiển thị nút di chuyển lên đầu trang khi cuộn xuống
    window.addEventListener('scroll', function () {
        if (window.scrollY > 500) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });
</script>


</body>
</html>
