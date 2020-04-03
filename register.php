<?php include('server.php') ?>
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
    <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" style="max-height: 6%;">
        <div class="container-fluid">
            <div class="branch">
                <a class="navbar-branch" href="index.php">
                    <img src="fullHome/home.png" height="30px">
                </a>
            </div>
            <li class="nav-item dropdown">
                <button class="nav-link dropdown-toggle" href="login.php" id="navbardrop" data-toggle="dropdown" style="background-color: lightcyan; border:none;position: relative; margin-bottom:25px;margin-left:15px;border-radius:34px;height:30px;padding-bottom:30px;margin-right:10px">Member</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="login.php">Login</a>
                    <a class="dropdown-item" href="register.php">Sign Up</a>
                </div>
            </li>

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

    <div class="limiter">
        <div class="navigate">
            <a href="index.php">Home Page</a> ➤ Regist
        </div>
        <div class="container-regist">
            <form class="login100-form validate-form flex-sb flex-w" method="post" action="register.php">
                <?php include('errors.php'); ?>

                    <div class="p-t-31 p-b-9" style="margin-top: 1vh">
						<span class="txt1">
                            User Name
                
						</span>
					</div><p></p>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="pwd" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>

                    <div class="p-t-31 p-b-9" style="margin-top: 1vh">
						<span class="txt1">
                            Email
						</span>
					</div><p></p>
					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="pwd" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>

                    <div class="p-t-31 p-b-9" style="margin-top: 1vh">
						<span class="txt1">
                            Password
                
						</span>
					</div><p></p>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="pwd" type="password" name="password_1">
						<span class="focus-input100"></span>
					</div>

                    <div class="p-t-31 p-b-9" style="margin-top: 1vh">
						<span class="txt1">
                            Confirm Password
                
						</span>
					</div><p></p>
					<div class="wrap-input100 validate-input" data-validate = "Re-confirm is required">
						<input class="pwd" type="password" name="password_2" >
						<span class="focus-input100"></span>
					</div>
                    <div class="p-t-31 p-b-9" style="margin-top: 1vh">
						<span class="txt1">
                            Phone Number
                
						</span>
					</div><p></p>
					<div class="wrap-input100 validate-input" data-validate = "Phone Number is required">
						<input class="pwd" type="text" name="phone" >
						<span class="focus-input100"></span>
					</div>
                    <div class="p-t-31 p-b-9" style="margin-top: 1vh">
						<span class="txt1">
                            Province
                
						</span>
					</div><p></p>
					<div class="wrap-input100 validate-input" data-validate = "Province is required">
						<input class="pwd" type="text" name="province" >
						<span class="focus-input100"></span>
					</div>
                    <div class="p-t-31 p-b-9" style="margin-top: 1vh">
						<span class="txt1">
                            Nation
                
						</span>
					</div><p></p>
					<div class="wrap-input100 validate-input" data-validate = "Nationality is required">
						<input class="pwd" type="text" name="national" >
						<span class="focus-input100"></span>
					</div>
                    <div class="p-t-31 p-b-9" style="margin-top: 1vh">
						<span class="txt1">
                            Gender
                
						</span>
					</div><p></p>
					<div class="wrap-input100 validate-input" data-validate = "Gender is required">
						<input class="pwd" type="text" name="gender" >
						<span class="focus-input100"></span>
					</div>
                    <button type="submit" class="loginbtn" name="reg_user">Register</button>
                <p >
                    Already a member? <a href="login.php" >Sign in</a>
                </p>
            </form>
        </div>
    </div>
    <div class="instructor">
        <p>Hướng dẫn nhận ưu đãi</p>
        <p>Detail <a href="#">here</a></p>
        <img src="image/gd.png">
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
                        <img src="https://lh3.googleusercontent.com/proxy/tRWbi-spfdPLoRlgAkmsKKLNpekBLEdWYRihbS-cRt4kNtMUJxbQvwYcq_2LtY9DGc4rVOHsk8hnE3c3UdiQJ9IKHa3AD3ny27VJ3aGlW0_H_f0osBa3" style="height: 60px; width:150px;">
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