<?php
// Thêm kết nối cơ sở dữ liệu và session_start() nếu chưa thực hiện

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Thực hiện kết nối cơ sở dữ liệu
    $connection = mysqli_connect('localhost', 'root', '', 'travel_book');

    if (!$connection) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    // Ví dụ: Truy xuất chi tiết đặt chỗ từ cơ sở dữ liệu
    $query = "SELECT * FROM book_form WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Truy vấn thất bại: " . mysqli_error($connection));
    }

    $booking = mysqli_fetch_assoc($result);
} else {
    header('Location: admin_dashboard.php'); // Chuyển hướng trở lại bảng điều khiển nếu không có ID được cung cấp
    exit();
}
// Xử lý gửi biểu mẫu sau khi nhấp vào Lưu thay đổi
if (isset($_POST['save_changes'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Ví dụ: Cập nhật chi tiết đặt chỗ trong cơ sở dữ liệu
    $query = "UPDATE book_form SET 
              name = '$name', 
              email = '$email', 
              phone = '$phone', 
              address = '$address', 
              location = '$location', 
              guests = '$guests', 
              arrivals = '$arrivals', 
              leaving = '$leaving' 
              WHERE id = $id";
              
    $update_result = mysqli_query($connection, $query);

    if ($update_result) {
        // Hiển thị thông báo thành công
        echo "<div class='alert alert-success mt-3'>Chỉnh sửa thành công!</div>";

        // Sau khi hiển thị thông báo, chuyển hướng trở lại bảng điều khiển
        header('Refresh: 2; URL=admin_dashboard.php');
        exit();
    } else {
        die("Cập nhật thất bại: " . mysqli_error($connection));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Chỉnh sửa đặt chỗ</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
   <div class="container mt-4">
      <h2 class="text-center mb-4">Chỉnh sửa đặt chỗ</h2>
      <!-- Biểu mẫu để chỉnh sửa các chi tiết đặt chỗ -->
      <form action="edit_booking.php?id=<?php echo $id; ?>" method="post">
         <!-- Hiển thị các chi tiết đặt chỗ hiện có trong biểu mẫu để chỉnh sửa -->
         <div class="form-group">
            <label for="name">Họ tên:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $booking['name']; ?>">
         </div>
         <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $booking['email']; ?>">
         </div>
         <div class="form-group">
            <label for="phone">Số điện thoại:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $booking['phone']; ?>">
         </div>
         <div class="form-group">
            <label for="address">Địa chỉ:</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo $booking['address']; ?>">
         </div>
         <div class="form-group">
            <label for="location">Địa điểm:</label>
            <input type="text" class="form-control" id="location" name="location" value="<?php echo $booking['location']; ?>">
         </div>
         <div class="form-group">
            <label for="guests">Số khách:</label>
            <input type="text" class="form-control" id="guests" name="guests" value="<?php echo $booking['guests']; ?>">
         </div>
         <div class="form-group">
            <label for="arrivals">Ngày đến:</label>
            <input type="text" class="form-control" id="arrivals" name="arrivals" value="<?php echo $booking['arrivals']; ?>">
         </div>
         <div class="form-group">
            <label for="leaving">Ngày đi:</label>
            <input type="text" class="form-control" id="leaving" name="leaving" value="<?php echo $booking['leaving']; ?>">
         </div>

         <button type="submit" class="btn btn-primary" name="save_changes">Lưu thay đổi</button>
      </form>
   </div>
   <!-- Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
