<?php 
	session_start();
	$total = 0;
	echo "Người mua:" . $_SESSION["name"] . "<br>";
	echo  "Số điên thoai:" . $_SESSION["numberPhone"] ." <br>";
	echo "email:" . $_SESSION["email"] . "<br>";
	?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<table>
		<tr>
			<th> San Pham </th>
			<th> gia san pham</th>
		</tr>
		<tr>
			<td><?php foreach ($_SESSION['sp'] as $value) {
				echo  $value . "<br>";
				}?></td>
			<td><?php foreach ($_SESSION['gia'] as $value) {
				echo  $value . "<br>";
				$total = $value + $total;
				}?></td>
		</tr>
	</table>
	<p> total: <?php echo $total; ?></p>
	<a href="http://localhost:8888/php/btphp/log_out.php"><button>log out</button></a>
</body>
</html>