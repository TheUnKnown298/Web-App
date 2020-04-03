<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$password="";
	$phone="";
	$national="";
	$province="";
	$gender="";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'pasgo');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = 	mysqli_real_escape_string($db, $_POST['email']);
		$phone=		mysqli_real_escape_string($db, $_POST['phone']);
		$national=	mysqli_real_escape_string($db, $_POST['national']);
		$province=	mysqli_real_escape_string($db, $_POST['province']);
		$gender=	mysqli_real_escape_string($db, $_POST['gender']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, pass) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$password = mysqli_real_escape_string($db, md5($_POST['pass']));
		// die($username . '| ' . $password);
		if (empty($phone)) {
			array_push($errors, "Phone number is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			//$password = md5($password;
			$query = "SELECT * FROM users WHERE phone='$phone' AND pass='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['phone'] = $phone;
				$_SESSION['pass']=$password;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}
			else if (mysqli_num_rows($results)!=1)
			{array_push($errors, "User haven't registed yet.");}
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	
	// SEARCH
	if (isset($_POST['search'])){
		$search=$_POST['search'];
		$search=preg_replace("#[^0-9a-z]#i","",$search);
		$query=mysql_db_query("SELECT * FROM restaurant_detail WHERE main_menu LIKE '%$search%' OR type_restaurant like '%$search%'");
		$count=mysql_num_rows($query);
		if($count == 0){
			$output='Không có kết quả nào hiển thị!';
		}else{
			while($row=mysql_fetch_array($query)){
				$mon_an=$row['main_menu'];
				$loai_nha_hang=$row['type_restaurant'];
				$open_time=$row['open_time'];
				$close_time=$row['close_time'];
				
				
				$output .= '<div>'.$mon_an. ' ' .$loai_nha_hang.' '.$open_time.' '.$close_time.'</div>';
			}
		}
		print("$output");
	}

?>