<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chúng tôi</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
         /* Thêm đoạn mã CSS này vào phần đầu của trang hoặc vào file CSS của bạn */
         .about,
         .reviews {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.5s ease, transform 0.5s ease;
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

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>Chúng Tôi</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/about-img.png" alt="">
   </div>

   <div class="content">
   <h3>Tại sao Lựa Chọn Chúng Tôi Cho Nhu Cầu Du Lịch Của Bạn</h3>
   <div class="content-about">
   <p>Trải Nghiệm Cá Nhân Hóa: Hành trình của bạn là duy nhất, chúng tôi tạo ra kế hoạch dựa trên sở thích và mong muốn riêng của bạn.</p>

   <p>Được Hướng Dẫn Bởi Người Địa Phương: Kiến thức địa phương giúp chúng tôi tạo ra trải nghiệm du lịch độc đáo và chân thực.</p>

   <p>Tạo Chi Tiết Đặc Biệt: Chúng tôi chú trọng từ việc lựa chọn khách sạn đến việc lập kế hoạch chi tiết, tạo ra hành trình suôn sẻ.</p>

   <p>An Toàn và Thoải Mái: An toàn của bạn luôn được đảm bảo và chúng tôi sẵn sàng hỗ trợ 24/7.</p>

   <p>Bền Vững: Chúng tôi ủng hộ du lịch bền vững và gắn kết với cộng đồng địa phương.</p>

   <p>Giá Trị Hợp Lý: Chúng tôi cung cấp trải nghiệm tốt với mức giá cạnh tranh.</p>

   <p>Kế Hoạch Mượt Mà: Quá trình đặt chỗ dễ dàng và chúng tôi lo các công việc hậu cần.</p>

   <p>Lựa Chọn Toàn Cầu: Chúng tôi cung cấp nhiều điểm đến trên khắp thế giới.</p>
   </div>
   
   <div class="icons-container">
      <div class="icons">
         <i class="fas fa-map"></i>
         <span>Điểm đến hàng đầu</span>
      </div>
      <div class="icons">
         <i class="fas fa-hand-holding-usd"></i>
         <span>Giá hợp lý</span>
      </div>
      <div class="icons">
         <i class="fas fa-headset"></i>
         <span>Hỗ trợ tư vấn 24/7</span>
      </div>
   </div>
</div>


</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> Nhận Xét từ Khách Hàng</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Tôi muốn chia sẻ về trải nghiệm xuất sắc với Travel. Họ đã tạo ra một kỳ nghỉ không thể nào quên cho tôi. Lập kế hoạch tỉ mỉ và độc đáo, khám phá những điểm đến độc đáo và trải nghiệm thân thiện với môi trường. Tôi luôn cảm thấy an tâm với sự hỗ trợ của họ và giá cả phải chăng. Tôi không thể khuyên Travel đủ nhiều!

Trân trọng,</p>
            <h3>Thông Tổng Thống</h3>
            <span>traveler</span>
            <img src="images/pic-1.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Gia đình Chị gửi lời cảm ơn đến Công ty Travel và Anh Long (Tổng Giám đốc) đã hỗ trợ cho cả đoàn có chuyến du lịch đầy thú vị. Chúc Tổng Giám đốc ngày càng tiến bộ và thành công hơn nữa nhé!</p>
            <h3>Ku Vũ</h3>
            <span>traveler</span>
            <img src="images/pic-2.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Rất cảm ơn anh Hướng dẫn viên cũng như Du Lịch Travel tổ chức tour chu đáo. Gia đình tôi rất hài lòng về chuyến đi này và sẽ tiếp tục sử dụng dịch vụ Du Lịch Travel trong các chuyến du lịch sau! Năm mới chúc gia đình Du Lịch Travel thêm thành công! </p>
            <h3>Tuấn Anh Đào</h3>
            <span>traveler</span>
            <img src="images/pic-3.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Chị muốn gữi lời cảm ơn đến Khoa, đã giúp cho chị cùng gia đình có một chuyến du xuân rất vui, hài lòng. Khoa đã truyền đạt, giới thiệu rất cặn kẽ mỗi một danh lam mà đoàn đi qua. Riêng đối với bản thân chị, đây là chuyến du lịch rất có ích đã giúp chị thấy tận mắt những gì mà trước đây mình chỉ biết qua sách vở.</p>
            <h3>Tời Bố Đuân</h3>
            <span>traveler</span>
            <img src="images/pic-4.png" alt="">
         </div>

         
            

      

   </div>

</section>

<!-- reviews section ends -->















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
// Lấy các thành phần cần thêm hiệu ứng xuất hiện khi cuộn tới đó
const aboutSection = document.querySelector('.about');
const reviewsSection = document.querySelector('.reviews');

// Hiệu ứng CSS cho phần about và reviews
const sectionEffect = { opacity: 1, transform: 'translateY(0)' };

// Thêm sự kiện cuộn chuột
window.addEventListener('scroll', function() {
  // Lấy vị trí hiện tại của cuộn chuột
  const scrollY = window.scrollY;
  
  // Lấy vị trí của phần about so với trình duyệt
  const aboutTop = aboutSection.getBoundingClientRect().top;
  
  // Lấy vị trí của phần reviews so với trình duyệt
  const reviewsTop = reviewsSection.getBoundingClientRect().top;
  
  // Khi phần about xuất hiện trên màn hình, thêm lớp "show-section" và áp dụng hiệu ứng tương ứng
  if (aboutTop < window.innerHeight - 100) {
    aboutSection.classList.add('show-section');
    Object.assign(aboutSection.style, sectionEffect);
  } else {
    aboutSection.classList.remove('show-section');
  }
  
  // Khi phần reviews xuất hiện trên màn hình, thêm lớp "show-section" và áp dụng hiệu ứng tương ứng
  if (reviewsTop < window.innerHeight - 100) {
    reviewsSection.classList.add('show-section');
    Object.assign(reviewsSection.style, sectionEffect);
  } else {
    reviewsSection.classList.remove('show-section');
  }
});
</script>

</body>
</html>