<?php
session_start();
$name=$email=$numberPhone=$nameErr=$emailErr=$numberPhoneErr="";

if(isset($_POST['submit'])){
	$rule = true;
	$name = $_POST["name"];
	$email = $_POST["email"];
	$numberPhone = $_POST["numberPhone"];
	if (empty($name)){
		$nameErr="Name is requested";
		$rule=false;
	}else {
		$name = test_input($name);
		if (!preg_match("/^[a-zA-Z]*$/",$name)){
			$nameErr = "only letters and white space";
			$name="";
			$rule = false;
		}
	}
	if (empty($email)){
		$emailErr= "email is requested";
		$rule=false;
	}else{
		$email = test_input($email);
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$emailErr="Invalid is format";
			$email="";
			$rule = false;
		}
	}
	if (empty($numberPhone)){
		$numberPhonrErr="Number Phone is requested";
		$rule=false;
	}else{
		$numberPhone= test_input($numberPhone);
		if (!preg_match("/^[0-9]*$/",$numberPhone)){
			$numberPhoneErr = "only number";
			$numberPhone = "";
			$rule = false;
		}
	}
	if ($rule){
	 $_SESSION["name"]=$name;
	 $_SESSION["email"]=$email;
	 $_SESSION["numberPhone"]=$numberPhone;
	 //print_r($_SESSION);
	 header("Location: http://localhost:8888/php/btphp/producstList.php");
 	}
}	
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
Name: <input type="text" name="name"><span class="error">*<?php echo $nameErr; ?></span><br><br>
Email: <input type="text" name="email"><span class="error">*<?php echo $emailErr; ?></span><br><br>
NumberPhone: <input type="text" name="numberPhone"><span class="error">*<?php echo $numberPhoneErr; ?></span><br><br>
<a href="http://localhost:8888/php/btphp/producstList.php"><input type="submit" value="Dangnhap" name="submit"></a>
</form>
</body>
</html>
