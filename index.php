<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" style="max-height: 6%;">
        <div class="container-fluid">
            <div class="branch">
                <a class="navbar-branch" href="index.php">
                    <img src="fullHome/home.png" height="40px">
                </a>
            </div>
            <li class="nav-item dropdown">
                <button class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="background-color: lightcyan; border:none;position: relative; margin-bottom:25px;margin-left:15px;border-radius:34px;height:30px;padding-bottom:30px;margin-right:10px">Member</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="login.php">Login</a>
                    <a class="dropdown-item" href="register.php">Sign Up</a>
                </div>
            </li>
            <div class="navsearch">
                <input type="text" placeholder="Find" style="border-radius: 34px;text-align:center">
                <button type="submit" class="navsearchbtn">Search<i class="fa fa-search"></i></button>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href ="#">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Culinary</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Restaurant</a>
                            <a class="dropdown-item" href="#">Hot Pot</a>
                            <a class="dropdown-item" href="#">Buffet</a>
                            <a class="dropdown-item" href="#">Seafood</a>
                            <a class="dropdown-item" href="#">Hot Pot and Grill</a>
                            <a class="dropdown-item" href="#">Pub</a>
                            <a class="dropdown-item" href="#">Vegetarian Food</a>
                            <a class="dropdown-item" href="#">Vietnamese Food</a>
                            <a class="dropdown-item" href="#">Book for Feast</a>
                            <a class="dropdown-item" href="#">Book for Wedding</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href ="#">Reputable Restaurant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href ="#">Hot Discount Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href ="#">Newest Event</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Explore</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Top Buffet</a>
                            <a class="dropdown-item" href="#">Serial Brand</a>
                            <a class="dropdown-item" href="#">Top Hot Pot and Grill</a>
                            <a class="dropdown-item" href="#">Top Seafood</a>
                            <a class="dropdown-item" href="#">Top Feast Booking</a>
                            <a class="dropdown-item" href="#">Top Vegetarian</a>
                            <a class="dropdown-item" href="#">Top in Area</a>
                            <a class="dropdown-item" href="#">Top Restaurant</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Pasgo Blog</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">All</a>
                            <a class="dropdown-item" href="#">Area to Eat</a>
                            <a class="dropdown-item" href="#">Famous Food and Recipe</a>
                            <a class="dropdown-item" href="#">Area's Specialty Dishes</a>
                            <a class="dropdown-item" href="#">Banquet and Event Organization</a>
                            <a class="dropdown-item" href="#">Beauty and Health</a>
                            <a class="dropdown-item" href="#">Culinary Stories</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">News</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">All</a>
                            <a class="dropdown-item" href="#">Pasgo's News</a>
                            <a class="dropdown-item" href="#">Recruitment</a>
                            <a class="dropdown-item" href="#">Culinary News</a>
                            <a class="dropdown-item" href="#">View</a>
                            <a class="dropdown-item" href="#">About Pasgo</a>
                            
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Video</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">All</a>
                            <a class="dropdown-item" href="#">Restaurant</a>
                            <a class="dropdown-item" href="#">Quality Dishes</a>
                            <a class="dropdown-item" href="#">Chronicle</a>
                            <a class="dropdown-item" href="#">Pikedup-Stories</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container"> 


        <section class="pasgo-search">
            <div class="searchbar">
                <div class="row">
                    <div class="col-md-1.5 selectedtinh" style="margin-left: 1vh;">
                        <div class="input-group" >
                            <span class="input-group-addon">
                                    <form action="/Base/ChangeProvince" method="post">                            
                                            <select class="form-control first" id="provinceId" name="provinceId" onchange="this.form.submit();"style="border-radius: 34px;">
                                                <option selected value="1">Hà Nội</option>
                                                <option  value="2">TP.HCM</option>
                                                <option  value="4">Đà Nẵng</option>
                                                <option  value="5">Khánh Hòa</option>
                                            </select>
                                     </form>                        
                                </span>
                        </div>
                    </div>
                    
                    <div class="col-md-8">
        <form action="/tim-kiem" class="navbar-form navbar-right bar-bottom" method="get">                    <div class="input-group">
                                <input id="textSearch" type="text" name="search" class="form-control" placeholder="Buffet, Hot Pot and Grill, Seafood..." onclick="searchWebsite();" oninput="searchWebsite();" autocomplete="off"style="border-radius: 34px;">
                                <span class="input-group-addon" style="margin-left: 10px;">    
                                    <select class="form-control selected" id="slTypeSearch" onchange="typeSearchSelected(this)"style="border-radius: 34px;">
                                        <option  value="1">Restaurant</option>
                                        <option  value="2">Explore</option>
                                        <option  value="3">Video</option>
                                    </select> 
                                </span>
                                <span class="input-group-addon frm-search">
                                    <button type="submit" class="sbutton"><span class="pasgo-icondesktop-search"></span>Search</button>
                                </span>
                                <!--Kết quả search-->
                                <div id="result"> </div>
                            </div>
        </form>            </div>
                    <div class="col-md-2">
                        <div class="phone"><span><i class="fa fa-phone" style="font-size:22px;color:red"></i></span> 1900 6005</div>
                    </div>
                </div>
            </div>
        </section>





        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1" ></li>
                <li data-target="#slides" data-slide-to="2" ></li>
                <li data-target="#slides" data-slide-to="3" ></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="fullHome/3-cach-lam-banh-trung-thu-de-lam-an-tai-nha-hay-lam-qua-deu-duoc-400-43590171546.jpg">
                    <div class="carousel-caption">
                        <h1>Lalala</h1>
                        <p></p>
                        <button type="button" class="btn btn-danger" >
                            Click
                        </button>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="fullHome/7-mau-trang-tri-sinh-nhat-cho-be-trai-tai-nha-voi-xe-o-to-cool-ngau-400-204127014025.jpg">
                </div>
                <div class="carousel-item ">
                    <img src="fullHome/an-gi-o-sai-gon-ngon-re-top-20-noi-tieng-nay-la-cau-tra-loi-400-182525014114.jpg">
                </div>
                <div class="carousel-item ">
                    <img src="fullHome/day-la-cac-mon-dac-san-ha-noi-noi-tieng-nhat-may-chuc-nam-qua-400-152694113942.jpg">
                </div>
            </div>
        </div>

        <div class="gallery">
            <h1>Gallery | <small><small> <span style="color: red;"> the biggest</span></small></small> </h1>
            
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="imagecontainer">
                        <a href="/w3images/lights.jpg">
                            <img src="image/ban-do-cha-ca-ha-noi-giam-toi-50-300-10916992ee7fa438-c8c6-462f-9cda-ef72804f13f5.jpg" alt="Lights" style="width:100%">
                              <div class="textbox">
                                <p>Lorem ipsum...</p>
                              </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="imagecontainer">
                        <a href="/w3images/nature.jpg">
                            <img src="image/bia-thu-cong-bia-cua-nguoi-sanh-dieu-giam-toi-52-300-10634942673e8ae8-afdb-4fd3-bccf-d2e8e41a8571.jpg" alt="Nature" style="width:100%">
                              <div class="textbox">
                                <p>Lorem ipsum...</p>
                              </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="imagecontainer">
                        <a href="/w3images/fjords.jpg">
                        <img src="image/binh-dan-300-19053775573eee85-16e2-419f-85de-2648c278798f.jpg" alt="Fjords" style="width:100%">
                          <div class="textbox">
                            <p>Lorem ipsum...</p>
                          </div>
                        </a>
                    </div>
                </div>
                
            </div>
            <div class="allgallery">
                <a href="#">See also &#x022D7;</a>
            </div>
        </div>

        <div class="gallery">
            <h1>Gallery | <small><small> <span style="color: red;"> the biggest</span></small></small> </h1>
            
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="imagecontainer">
                        <a href="/w3images/lights.jpg">
                            <img src="image/buffet-duoi-200-000-vnd-300-12052388ef42b51-ee96-4470-9e28-08a1de731f8b.jpg" alt="Lights" style="width:100%">
                              <div class="textbox">
                                <p>Lorem ipsum...</p>
                              </div>
                        </a>
                    </div>
                    <div>
                        <p id="discount">Lalalalalal<br>dadsadasda</p>
                        <button class="booktable"><a href="https://www.facebook.com/messages/t/100014540079469" target="blank">Book Table Now!</a></button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="imagecontainer">
                        <a href="/w3images/nature.jpg">
                            <img src="image/buffet-lau-ufo-tu-145k-nguoi-tai-food-house-300-11272582842fe1e6-9507-4c58-9823-a0048771d914.jpg" alt="Nature" style="width:100%">
                              <div class="textbox">
                                <p>Lorem ipsum...</p>
                              </div>
                        </a>
                        
                            
                    </div>
                    <div>
                        <p id="discount">Lalalalalal<br>dadsadasda</p>
                        <button class="booktable"><a href="https://www.facebook.com/messages/t/100014540079469" target="blank">Book Table Now!</a></button>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="imagecontainer">
                        <a href="/w3images/.jpg">
                        <img src="image/cao-luong-nao-bang-com-nha-nhi-giam-toi-50-300-120652891cba0b0f-1abb-4992-8eaa-4c2b729afc95.jpg" alt="Fjords" style="width:100%">
                          <div class="textbox">
                            <p>Lorem ipsum...</p>
                            <p>Lalalalalal</p>
                          </div>
                        </a>
                        
                        
                       
                    </div>
                    <div>
                        <p id="discount">Lalalalalal<br>dadsadasda</p>
                        <button class="booktable"><a href="https://www.facebook.com/messages/t/100014540079469" target="blank">Book Table Now!</a></button>
                    </div>

                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="imagecontainer">
                        <a href="/w3images/fjords.jpg">
                        <img src="image/choi-dau-an-gi-ngay-cuoi-tuan-giam-den-50-300-156725794e86dd97-01d7-4344-b6e8-75f1c78ee6f7.jpg" alt="Fjords" style="width:100%">
                          <div class="textbox">
                            <p>Lorem ipsum...</p>
                            <p>Lalalalalal</p>
                          </div>
                        </a>
                        
                        
                       
                    </div>
                    <p id="discount">Lalalalalal<br>dadsadasda</p>
                    <button class="booktable"><a href="https://www.facebook.com/messages/t/100014540079469" target="blank">Book Table Now!</a></button>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="imagecontainer">
                        <a href="/w3images/fjords.jpg">
                        <img src="image/dat-tiec-tet-duong-lich-300-9217558200cd490-bc06-4a98-8a24-c52b09e5414c.jpg" alt="Fjords" style="width:100%">
                          <div class="textbox">
                            <p>Lorem ipsum...</p>
                            <p>Lalalalalal</p>
                          </div>
                        </a>
                        
                        
                       
                    </div>
                    <p id="discount">Lalalalalal<br>dadsadasda</p>
                    <button class="booktable"><a href="https://www.facebook.com/messages/t/100014540079469" target="blank">Book Table Now!</a></button>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="imagecontainer">
                        <a href="/w3images/fjords.jpg">
                        <img src="image/quan-ngon-dan-van-phong-300-19441885224a0b79-e9c7-4f4c-a94e-ddfc395584eb.jpg" alt="Fjords" style="width:100%">
                          <div class="textbox">
                            <p>Lorem ipsum...</p>
                            <p>Lalalalalal</p>
                          </div>
                        </a>
                        
                        
                       
                    </div>
                    <p id="discount">Lalalalalal<br>dadsadasda</p>
                    <button class="booktable"><a href="https://www.facebook.com/messages/t/100014540079469" target="blank">Book Table Now!</a></button>

                </div>
            </div>
            <div class="allgallery">
                <a href="#">See also &#x022D7;</a>
                
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="infor">
            <div class="row">
                <div class="col-md-2">
                    <h1>Pasgo</h1>
                    <p>PasGo là Mạng lưới nhà hàng NGON, uy tín và chất lượng. Giúp thực khách đặt bàn dễ dàng, được tặng kèm ưu đãi mà không cần mua Deal, Voucher. Giải pháp đột phá mới cho câu chuyện ăn gì, ở đâu!</p>
                </div>
                <div class="col-md-2">
                   <h3>Về PasGo</h3>
                   <a href="#" class="inforlink">Những điều thú vị về App PasGo – Có thể bạn chưa biết!</a><br>
                   <a href="#" class="inforlink">Vì sao PasGo đang phát triển!</a><br>
                   <a href="#" class="inforlink">Hướng dẫn đặt bàn</a><br>
                   <a href="#" class="inforlink">Chính sách bảo mật</a>
                </div>
                <div class="col-md-2">
                    <h3>Interaction</h3>
                    <a href="#" class="inforlink">Report</a><br>
                    <a href="#" class="inforlink">Q&A</a><br>
                    <a href="#" class="inforlink">For Restaurant Owner</a><br>
                    <a href="#" class="inforlink">News</a><br>
                    <a href="#" class="inforlink">Contact</a>
                </div>
                <div class="col-md-2">
                    <h3>Join with us</h3>
                    <span style="margin-left: 5px;">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </span><br>
                    <p></p><br>
                    <h4>Verified Brand</h4>
                    <a href="http://online.gov.vn/HomePage/WebsiteDisplay.aspx?DocId=16895" target="blank">
                        <img src="image/bocongthuong.png" style="height: 60px; width:150px;">
                    </a>
                </div>
                <div class="col-md-4">
                    <h5>Regist for Promotion Informations</h5>
                    <p>Đăng ký nhận thông tin ưu đãi hấp dẫn và khám phá, cập nhật các xu hướng ẩm thực mới lạ, thú vị.</p>

                    <section class="emailsm">
                        <div >
                            <div class="row">
                                <div>
                                    <form action="" class="navbar-form navbar-right bar-bottom" method="get">                    
                                        <div class="input-group">
                                            <input id="email" type="text" name="youremail" placeholder="Your Email...." style="border-radius: 34px;margin-left:13px;width:230px;text-align:center">
                                            <span class="input-group-addon frm-search">
                                                <button type="submit" class="sbutton"><span class="pasgo-icondesktop-search"></span>Regist</button>
                                            </span>
                                        </div>
                                     </form>     
                                </div>
                            </div>       
                        </div>
                    </section>
            
                </div>
            </div>
        </div>
    </div>




</body>






</html>