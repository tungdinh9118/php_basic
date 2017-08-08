<?php
$danhsach = array();
function danhsach($hoten="nguyenvana",$namsinh="2000",$gioitinh="nam",&$danhsach){
	$array = array("Hoten"=>$hoten,
				   "Namsinh"=>$namsinh,
				   "Gioitinh"=>$gioitinh);
    $x = array_unshift($danhsach, $array);
    return($danhsach);
}
danhsach("dinhquangtung","1994","nam",$danhsach);
danhsach("tranvantien","1999","nam",$danhsach);
danhsach("nguyenthibich","1995","nu",$danhsach);
echo "<pre>";
echo print_r($danhsach);
echo "</pre>";
?>