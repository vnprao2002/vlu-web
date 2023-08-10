<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gói Du Lịch</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
         /* Thêm đoạn mã CSS này vào phần đầu của trang hoặc vào file CSS của bạn */
         .packages {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 01s ease, transform 0.5s ease;
         }
         
         .show-section {
            opacity: 1;
            transform: translateY(0);
         }
   </style>
</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">Trang Chủ</a>
      <a href="about.php">Chúng Tôi</a>
      <a href="package.php">Gói Du Lịch</a>
      <a href="book.php">Đặt Vé</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>Gói Du Lịch</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Du Lịch Phú Quốc</h3>
            <p>Phú Quốc - Hòn Đảo Thiên Đàng Với Biển Xanh, Bãi Cát Trắng, Thực Phẩm Tuyệt Hảo Và Nắng Ấm Quanh Năm</p>
            <a href="book.php" class="btn">Đặt Ngay</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Du Lịch Sapa</h3>
            <p>Sapa - Bản Đẹp Mê Hồn, Rừng Mây Bao Phủ, Đỉnh Fansipan Cao Nhất Đông Dương, Sắc Màu Vùng Cao Đa Dạng Và Mê Hoặc.</p>
            <a href="book.php" class="btn">Đặt Ngay</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Du Lịch Đà Lạt</h3>
            <p>Đà Lạt - Thành Phố Ngàn Hoa, Khí Hậu Mát Mẻ, Hồ Tuyền Lâm, Thiền Viện Trúc Lâm, Vàng Cỏ, Không Gian Lãng Mạn Và Tình Yêu.</p>
            <a href="book.php" class="btn">Đặt Ngay</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-4.jpg" alt="">
         </div>
         <div class="content">
            <h3>Du Lịch Đà Nẵng</h3>
            <p>Trong hành trình khám phá miền Trung Việt Nam, bạn không thể nào bỏ qua địa điểm du lịch Đà Nẵng. Đây là thành phố của nhiều cây cầu đẹp như cầu sông Hàn, cầu Rồng, cầu Thuận Phước, cầu tình yêu</p>
            <a href="book.php" class="btn">Đặt Ngay</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Du Lịch Phan Thiết</h3>
            <p>Nhắc đến Phan Thiết, người ta không chỉ nhớ đến làng nghề nước nắm  mà còn gợi nhớ đến nhiều địa điểm du lịch nổi tiếng như Tháp Po Sah Inư, lầu Ông Hoàng, bãi đá Ông Địa…</p>
            <a href="book.php" class="btn">Đặt Ngay</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Du Lịch Phú Quý</h3>
            <p>Phú Quý còn được gọi là cù lao Thu là hòn đảo nhỏ nằm cách TP Phan Thiết khoảng 120km về phía Đông Nam. Diện tích đảo tuy không lớn nhưng có đủ cảnh đẹp, danh thắng để du khách khám phá, trải nghiệm.</p>
            <a href="book.php" class="btn">Đặt Ngay</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Du Lịch Hạ Long</h3>
            <p>Địa điểm du lịch Hạ Long Quảng Ninh là một trong những điểm đến hấp dẫn bậc nhất nước ta. Với diện tích lên đến 1.553km2 bao gồm 1.900 hòn đảo đá vôi mang nhiều hình thù đẹp mắt, sinh động.</p>
            <a href="book.php" class="btn">Đặt Ngay</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-8.jpg" alt="">
         </div>
         <div class="content">
            <h3>Du Lịch Huế</h3>
            <p>Huế mang vẻ đẹp trầm mặc, mộng mơ cùng nhiều giá trị văn hóa, lịch sử lâu đời. Đến đây, bạn sẽ được chiêm ngưỡng những công trình kiến trúc độc đáo của lăng tẩm, Đại Nội Huế.</p>
            <a href="book.php" class="btn">Đặt Ngay</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-9.jpg" alt="">
         </div>
         <div class="content">
            <h3>Du Lịch Nha Trang</h3>
            <p>Vẻ đẹp tựa như tranh của địa điểm du lịch Nha Trang để lại ấn tượng khó phai trong lòng du khách. Đến với thành phố biển xinh đẹp này, bạn sẽ được chiêm ngưỡng cảnh quan thiên nhiên tuyệt đẹp của vịnh Vân Phong, vịnh Ninh Vân, đảo Điệp Sơn,..</p>
            <a href="book.php" class="btn">Đặt Ngay</a>
         </div>
      </div>



   </div>

   <div class="load-more"><span class="btn">Xem thêm</span></div>

</section>

<!-- packages section ends -->
















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
<script>
// Lấy thành phần cần thêm hiệu ứng xuất hiện khi cuộn tới đó
const packagesSection = document.querySelector('.packages');

// Hiệu ứng CSS cho phần packages
const packagesEffect = { opacity: 1, transform: 'translateY(0)' };

// Thêm sự kiện cuộn chuột
window.addEventListener('scroll', function() {
  // Lấy vị trí hiện tại của cuộn chuột
  const scrollY = window.scrollY;
  
  // Lấy vị trí của phần packages so với trình duyệt
  const packagesTop = packagesSection.getBoundingClientRect().top;
  
  // Khi phần packages xuất hiện trên màn hình, thêm lớp "show-section" và áp dụng hiệu ứng tương ứng
  if (packagesTop < window.innerHeight - 100) {
    packagesSection.classList.add('show-section');
    Object.assign(packagesSection.style, packagesEffect);
  } else {
    packagesSection.classList.remove('show-section');
  }
});
</script>

</body>
</html>