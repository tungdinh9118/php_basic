<?php 
	session_start();
	if (isset($_POST["submit_1"])){
		//Data lay la gi em? sao anh ko thay vay?
		$name = $_POST['sp1'];
		$price = $_POST['price1'];
		if(!empty($name) && !empty($price) && $price>0){
			//Luu session san pham nay
			$_SESSION['sp'][] = $name;
			$_SESSION['gia'][] = $price;
			//Minh se print ra thu hen
			//echo "<pre>";
			//echo print_r($_SESSION['products']);
			//echo "</pre>";
		}
		// $arrlength = count($_SESSION["sanpham"]);
		// addarray($_SESSION["sanpham"],$sanPham1);
	}
	if (isset($_POST["submit_2"])){
		//addarray($_SESSION["sanpham"],$sanPham2);
		//tuong tu cai san pham 1 nha Tung :)da
		$name = $_POST['sp2'];
		$price = $_POST['price2'];
		if(!empty($name) && !empty($price) && $price>0){
			//Luu session san pham nay
			$_SESSION["sp"][] = $name;
			$_SESSION['gia'][] = $price;

	}
	}
	if (isset($_POST["submit_3"])){
		//addarray($_SESSION["sanpham"],$sanPham2);
		//tuong tu cai san pham 1 nha Tung :)da
		$name = $_POST['sp3'];
		$price = $_POST['price3'];
		if(!empty($name) && !empty($price) && $price>0){
			//Luu session san pham nay
			$_SESSION["sp"][] = $name;
			$_SESSION["gia"][] = $price;

	}
	}
	if (isset($_POST["submit_4"])){
		//addarray($_SESSION["sanpham"],$sanPham2);
		//tuong tu cai san pham 1 nha Tung :)da
		$name = $_POST['sp4'];
		$price = $_POST['price4'];
		if(!empty($name) && !empty($price) && $price>0){
			//Luu session san pham nay
			$_SESSION['sp'][] = $name;
			$_SESSION['gia'][] = $price;

	}
	}
	if (isset($_POST["submit_5"])){
		//addarray($_SESSION["sanpham"],$sanPham2);
		//tuong tu cai san pham 1 nha Tung :)da
		$name = $_POST['sp5'];
		$price = $_POST['price5'];
		if(!empty($name) && !empty($price) && $price>0){
			//Luu session san pham nay
			$_SESSION['sp'][] = $name;
			$_SESSION['gia'][] = $price;

	}
	}
	if (isset($_POST["submit_6"])){
		//addarray($_SESSION["sanpham"],$sanPham2);
		//tuong tu cai san pham 1 nha Tung :)da
		$name = $_POST['sp6'];
		$price = $_POST['price6'];
		if(!empty($name) && !empty($price) && $price>0){
			//Luu session san pham nay
			$_SESSION['sp'][] = $name;
			$_SESSION['gia'][] = $price;

	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<style>
body {
	padding:10px;
	margin:10px 0px 10px 70px;
}
.rows1 {
	padding:10px;
	margin:5px;
	float: left;
}
.rows2 {
	float: left;
	padding:10px;
	margin:5px;
}
img {
	width:350px ;
	height:380px;
}
div {
	text-align:center;
}
</style>
</head>
<body>

<form  class="rows1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<img src="img/1.jpg" >
<div>
<p>Sản Phẩm: iphone</p>
<input type="hidden" name="sp1" value="iphone">
<p>Giá: 1000</p>
<input type="hidden" name="price1" value="1000" >
<input type="submit" value="submit" name="submit_1">
</div>
</form>

<form  class="rows1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<img src="img/2.png" >
<div>
<p>Sản Phẩm: samsung</p>
<input type="hidden" name="sp2" value="samsung">
<p>Giá: 2000 </p>
<input type="hidden" name="price2" value="2000">
<input type="submit" value="submit" name="submit_2">
</div>
</form>

<form class="rows1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<img src="img/3.png" >
<div>
<p>Sản Phẩm: htc</p>
<input type="hidden" name="sp3" value="htc">
<p>Giá: 3000</p>
<input type="hidden" name="price3" value="3000">
<input type="submit" value="submit" name="submit_3">
</div>
</form>

<form class="rows2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<img src="img/4.jpg" >
<div>
<p>Sản Phẩm: oppo </p>
<input type="hidden" name="sp4" value="oppo">
<p>Giá:4000</p>
<input type="hidden" name="price4" value="4000">
<input type="submit" value="submit" name="submit_4">
</div>
</form>

<form class="rows2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<img src="img/5.jpg" >
<div>
<p>Sản Phẩm: sony </p>
<input type="hidden" name="sp5" value="sony">
<p>Giá:5000</p>
<input type="hidden" name="price5" value="5000">
<input type="submit" value="submit" name="submit_5">
</div>
</form>

<form class="rows2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<img src="img/6.jpg" >
<div>
<p>Sản Phẩm: LG</p>
<input type="hidden" name="sp6" value="LG">
<p>Giá: 6000</p>
<input type="hidden" name="price6" value="6000">
<input type="submit" value="submit" name="submit_6">
</div>
</form>
<div>
<a href="http://localhost:8888/php/btphp/cart.php"><button> danh sach mua do</button></a>
</div>
</body>
</html>
