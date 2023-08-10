<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">trang chủ</a>
      <a href="about.php">chúng tôi</a>
      <a href="package.php">Gói du lịch</a>
      <a href="book.php">đặt vé</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Đặt vé ngay</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Đặt chuyến đi cho bạn!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>tên :</span>
            <input type="text" placeholder="Nhập tên của bạn" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="Nhập email của bạn" name="email">
         </div>
         <div class="inputBox">
            <span>số điện thoại :</span>
            <input type="number" placeholder="Số điện thoại của bạn" name="phone">
         </div>
         <div class="inputBox">
            <span>địa chỉ :</span>
            <input type="text" placeholder="Nhập địa chỉ của bạn" name="address">
         </div>
         <div class="inputBox">
            <span>Đi đâu :</span>
            <input type="text" placeholder="Nơi bạn muốn đến" name="location">
         </div>
         <div class="inputBox">
            <span>số người :</span>
            <input type="number" placeholder="Số thành viên " name="guests">
         </div>
         <div class="inputBox">
            <span>ngày đi :</span>
            <input type="date" name="Ngày bạn muốn khởi hành">
         </div>
         <div class="inputBox">
            <span> ngày về:</span>
            <input type="date" name="Ngày bạn muốn về">
         </div>
      </div>

      <input type="submit" value="Gửi !" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> trang chủ</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> chúng tôi</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> gói du lịch</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> đặt vé</a>
      </div>


      <div class="box">
         <h3>Liên hệ</h3>
         <a href="#"> <i class="fas fa-phone"></i> +84-346-935-394 </a>
         <a href="#"> <i class="fas fa-envelope"></i> tuan.207ct6587@vanlanguni.vn </a>
         <a href="#"> <i class="fas fa-map"></i> Đặng Thùy Trâm, Phường 13, Quận Bình Thạnh </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

  

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>