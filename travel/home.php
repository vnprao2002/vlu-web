<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/style.css">

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

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(./images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>khám phá, du lịch</span>
               <h3>DU LỊCH KHẮP VIỆT NAM</h3>
               <a href="package.php" class="btn">khám phá nhiều hơn</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(./images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>khám phá, du lịch</span>
               <h3>DU LỊCH KHẮP VIỆT NAM</h3>
               <a href="package.php" class="btn">khám phá nhiều hơn</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>khám phá, du lịch</span>
               <h3>Làm cho chuyến tham quan của bạn đáng giá</h3>
               <a href="package.php" class="btn">khám phá nhiều hơn</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Dịch vụ của chúng tôi </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Thám hiểm</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Hướng dẫn viên du lịch</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Leo núi</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Đốt lửa trại</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Hướng dẫn đường đi</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Cắm trại</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.png" alt="">
   </div>

   <div class="content">
      <h3> chúng tôi</h3>
      <p>Đối tác đáng tin cậy của bạn trong hành trình khám phá thế giới và tận hưởng những trải nghiệm du lịch đáng nhớ. Với hơn 10 năm kinh nghiệm hoạt động trong ngành du lịch, chúng tôi tự hào là một trong những công ty dẫn đầu trong lĩnh vực này, cung cấp các chương trình du lịch chất lượng cao và dịch vụ hoàn hảo cho khách hàng trên khắp thế giới.</p>
      <a href="about.php" class="btn">Tìm hiểu thêm</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> CÁC GÓI CỦA CHÚNG TÔI </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Du lịch phú quốc</h3>
            <p>Phú Quốc - Hòn đảo thiên đàng với biển xanh, bãi cát trắng, thực phẩm tuyệt hảo và nắng ấm quanh năm.</p>
            <a href="book.php" class="btn">Đặt ngay</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>du lịch sapa</h3>
            <p>Sapa - Bản đẹp mê hồn, rừng mây bao phủ, đỉnh Fansipan cao nhất Đông Dương, sắc màu vùng cao đa dạng và mê hoặc.</p>
            <a href="book.php" class="btn">Đặt ngay</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>du lịch đà lạt</h3>
            <p>Đà Lạt - Thành phố ngàn hoa, khí hậu mát mẻ, hồ Tuyền Lâm, thiền viện Trúc Lâm, vàng cỏ, không gian lãng mạn và tình yêu.</p>
            <a href="book.php" class="btn">Đặt ngay</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Giảm giá</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>Tới 50 %</h3>
      <p>Bạn đã sẵn sàng cho một cuộc hành trình phiêu lưu và khám phá thế giới với giá cực kỳ hấp dẫn?  xin trân trọng giới thiệu đến bạn chương trình giảm giá không thể tuyệt vời hơn - GIẢM GIÁ 50% cho mỗi tour du lịch đặt trong thời gian giới hạn.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

















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
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- ... -->
</head>
<body>
   
<!-- Các thành phần cần thêm hiệu ứng xuất hiện khi cuộn tới đó -->
<section class="services">
   <!-- ... -->
</section>

<section class="home-about">
   <!-- ... -->
</section>

<section class="home-packages">
   <!-- ... -->


<!-- ... -->


<script>
// Lấy danh sách các thành phần cần thêm hiệu ứng xuất hiện
const sections = document.querySelectorAll('.services, .home-about, .home-packages');

// Các hiệu ứng CSS khác nhau cho từng thành phần
const effects = [
  { opacity: 1, transform: 'translateY(0)' }, // Hiệu ứng cho .services
  { opacity: 1, transform: 'translateY(0)' }, // Hiệu ứng cho .home-about
  { opacity: 1, transform: 'translateY(0)' }, // Hiệu ứng cho .home-packages
];

// Thêm sự kiện cuộn chuột
window.addEventListener('scroll', function() {
  // Lấy vị trí hiện tại của cuộn chuột
  const scrollY = window.scrollY;
  
  // Lặp qua từng thành phần
  sections.forEach((section, index) => {
    // Lấy vị trí của thành phần so với trình duyệt
    const sectionTop = section.getBoundingClientRect().top;
    
    // Khi thành phần xuất hiện trên màn hình, thêm lớp "show-section" và áp dụng hiệu ứng tương ứng
    if (sectionTop < window.innerHeight - 100) {
      section.classList.add('show-section');
      Object.assign(section.style, effects[index]);
    } else {
      section.classList.remove('show-section');
    }
  });
});
</script>

<!-- ... -->
</body>
</html>


</body>
</html>