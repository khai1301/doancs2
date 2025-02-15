<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Fresh Organic Food</title>
        <link rel="stylesheet" href="{{ asset('css/navbar/style.css') }}">
    </head>
    <body>
        <div id="wrapper">
            <header class="header">
                <div class="top-bar" >
                    <div class="flex-row container">
                        <div class="flex-left">
                            <ul class="ul-left" >
                            </ul>
                        </div>
                        <div class="flex-center">
                            <ul class="ul-center"></ul>
                        </div>
                       
                        
                    </div>
                </div>
                <div  class="header-main">
                    @include('header2')
                    <div class="banner">
                        <img src="img\banner.jpg" alt="" id="banner">
                        <nav class="btmn">
                            <form action="" >
                                <button >MUA NGAY</button>
                            </form>
                        </nav>
                        <nav>
                            <p id="p">TÌM MUA <b id="b">THỰC PHẨM SẠCH</b> TỪ <b id="b"><br>
                                NHÀ CUNG CẤP UY TÍN</b> TẠI ĐÂY</p>
                        </nav>
                    </div>
                    <div class="content">
                        <p id="p1"><b>Mua sản phẩm lựa chọn từ vườn</b></p>
                    </div>
                    <div class="row">
                        <div class="menubot large">
                            <div class="menubot1 text-center">
                                <div class="container">
                                    <img src="img\index_cate_1.png" alt="" class="image">
                                </div>
                                <div class="space" style="display:block; height: auto; padding-top: 20px;"></div>
                                <h3>
                                    <a href="cuahang.html" id="text-menu">Rau củ</a>
                                </h3>
                            </div>
                        </div>
                        <div class="menubot large">
                            <div class="menubot2 text-center">
                                <div class="container">
                                    <img src="img\index_cate_2.png" alt="" class="image">
                                </div>
                                <div class="space" style="display:block; height: auto; padding-top: 20px;"></div>
                                <h3>
                                    <a href="cuahang.html" id="text-menu">Hải sản</a>
                                </h3>
                            </div>
                        </div>
                        <div class="menubot large">
                            <div class="menubot3 text-center">
                                <div class="container">
                                    <img src="img\index_cate_3.png" alt="" class="image">
                                </div>
                                <div class="space" style="display:block; height: auto; padding-top: 20px;"></div>
                                <h3>
                                    <a href="cuahang.html" id="text-menu">Thịt trứng</a>
                                </h3>
                            </div>
                        </div>
                        <div class="menubot large">
                            <div class="menubot4 text-center">
                                <div class="container">
                                    <img src="img\index_cate_4.png" alt="" class="image">
                                </div>
                                <div class="space" style="display:block; height: auto; padding-top: 20px;"></div>
                                <h3>
                                    <a href="cuahang.html" id="text-menu">Trái cây</a>
                                </h3>
                            </div>
                        </div>
                        <div class="menubot large">
                            <div class="menubot5 text-center">
                                <div class="container">
                                    <img src="img\index_cate_5.png" alt="" class="image">
                                </div>
                                <div class="space" style="display:block; height: auto; padding-top: 20px;"></div>
                                <h3>
                                    <a href="cuahang.html" id="text-menu">Đồ khô</a>
                                </h3>
                            </div>
                        </div>
                        <div class="menubot large">
                            <div class="menubot6 text-center">
                                <div class="container">
                                    <img src="img\index_cate_6.png" alt="" class="image">
                                </div>
                                <div class="space" style="display:block; height: auto; padding-top: 20px;"></div>
                                <h3>
                                    <a href="cuahang.html" id="text-menu">Đồ uống</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <p id="p1"><b>Chương trình khuyến mãi</b></p>
                    </div>
                    <div class="row">
                        <div class="km large1">
                            <div class="km1">
                                <img src="img\km1.png" alt="" class="img">
                            </div>
                        </div>
                        <div class="km large1">
                            <div class="km1">
                                <img src="img\km2.jpg" alt="" class="img">
                            </div>
                        </div>
                        <div class="km large1">
                            <div class="km1">
                                <img src="img\km3.jpg" alt="" class="img">
                            </div>
                        </div>
                        <div class="km large1">
                            <div class="km1">
                                <img src="img\km4.png" alt="" class="img">
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <p id="p1"><b>Sản phẩm nổi bật</b></p>
                    </div>
                    <div class="row1">
                        <div class="pr" >
                            <div class="">
                                <img width="2048" height="2048" src="img\buoi.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="giohang.html">Bưởi da xanh hướng hữu cơ 1kg</a>
                            </div>
                            <div class="price">
                                <p>75.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="giohang.html" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\thanhlong.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="giohang.html">Thanh long sạch Bình Thuận 1kg</a>
                            </div>
                            <div class="price">
                                <p>45.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="giohang.html" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\saurieng.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="giohang.html">Sầu riêng Ri6 sạch 1kg</a>
                            </div>
                            <div class="price">
                                <p>235.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="giohang.html" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\xoai.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Xoài cát Hòa Lộc Global GAP loại đặc biệt</a>
                            </div>
                            <div class="price">
                                <p>140.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\cai.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Cải bó xôi hữu cơ (Rau chân vịt) 350g</a>
                            </div>
                            <div class="price">
                                <p>30.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\bo.jpeg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Bơ sáp 034 Lâm Đồng hướng hữu cơ 1kg</a>
                            </div>
                            <div class="price">
                                <p>135.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="row1 row2">
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\catracvang.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Cá Trác vàng biển Ích Hữu 400g</a>
                            </div>
                            <div class="price">
                                <p>75.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\cabasa.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Cá Basa cắt lát hữu cơ Binca hộp 270g</a>
                            </div>
                            <div class="price">
                                <p>75.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\ga.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Gà ta thả vườn Bình Định 1kg</a>
                            </div>
                            <div class="price">
                                <p>155.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\thitheo.png" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Thịt nạc đùi heo hữu cơ 400g Thịt nạc đùi heo hữu cơ 400g</a>
                            </div>
                            <div class="price">
                                <p>84.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\tomsu.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Tôm sú hữu cơ Binca size đặc biệt XL hộp 250g</a>
                            </div>
                            <div class="price">
                                <p>180.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\cam.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Cam xoàn hướng hữu cơ 1kg</a>
                            </div>
                            <div class="price">
                                <p>65.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="more">
                        <a href="cuahang.html" id="more">Xem thêm</a>
                    </div>
                    <div class="content">
                        <p id="p1"><b>Cam kết của chúng tôi</b></p>
                    </div>
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                            <img src="./img/slide1.jpg" style="width:100%">
                        </div>
                        
                        <div class="mySlides fade">
                            <img src="./img/slide2.jpg" style="width:100%">
                        </div>
                        
                        <div class="mySlides fade">
                            <img src="./img/slide3.jpg" style="width:100%">
                        </div>
                        
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>
                        
                    </div>
                        <br>
                        
                        <div style="text-align:center">
                          <span class="dot" onclick="currentSlide(1)"></span> 
                          <span class="dot" onclick="currentSlide(2)"></span> 
                          <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    <section class="subcribe " style="padding-top: 60px;">
                        <div class="subcribe-background">
                            <div class="subcribe-container">
                                <div class="row-sub">
                                    <div class="col-sub">
                                        <h2>Đăng ký</h2>
                                        <p>Đăng ký để nhận được được thông tin mới nhất từ chúng tôi.</p>
                                        <div class="input-mail-sub">
                                            <form action="" class="input">
                                                <div class="form-group">
                                                    <input type="text" class="text-mail" placeholder="Enter email">
                                                    <input class="button" type="submit" value="Đăng ký"></input>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Footer -->
                    @include('footer')
                </div>
            </header>
        </div>
        <!-- js nav -->
        <script type="text/javascript">
            window.addEventListener("scroll", function(){
                var header = document.querySelector(".header-menu");
                header.classList.toggle("sticky", window.scrollY > 0);
            })
        </script>
        <!--js slide show-->
        <script>
            let slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
            </script>
            <!--auto slide show-->
            <script>
                let slideIndex1 = 0;
                showSlides();
                
                function showSlides() {
                  let i;
                  let slides = document.getElementsByClassName("mySlides");
                  let dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                  }
                  slideIndex1++;
                  if (slideIndex1 > slides.length) {slideIndex1 = 1}    
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex1-1].style.display = "block";  
                  dots[slideIndex1-1].className += " active";
                  setTimeout(showSlides, 3000); // doi anh moi 2s
                }
                </script>
    </body>
</html>