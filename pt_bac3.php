<?php
function giai_pt_bac3($a="1",$b="1",$c="1",$d="1"){
	if ($a == "0"){
		echo "giải pt bâc 2";
	}
	else {
		echo "deta:";
	    echo $deta = pow($b,2) - 3*$a*$c . "<br>";

	  if ($deta > 0){
	  	echo "k:";
	  	echo $k = ((9*$a*$b*$c-2*pow($b,3)-27*pow($a,2)*$d)/(sqrt(pow(abs($deta),3))));
	  	echo "<br>";
	  	$k = abs($k);
	  	if ( $k <= 1) {
	  		$x1 = (((2*pow($deta,1/2))-$b)/(3*$a));
	  		$x2 = (((2*pow($deta,1/2))-(2*pi()/3))-$b)/(3*$a);
	  		$x3 = (((2*pow($deta,1/2))+(2*pi()/3))-$b)/(3*$a);
	  		echo "phuong trinh co 3 nghiem la:" . "<br>";
	  		echo "x1: ".$x1."<br>"  ;
	  		echo "x2: ".$x2."<br>" ;  	
	  		echo "x3: ".$x3. "<br>" ;
	  		
	  	}
	  	else {	  		
	  		$x = (((sqrt($deta)*abs($k))/(3*$a*$k))*((pow(abs($k)+sqrt(pow($k,2)-1),1/3))+pow(abs($k)-sqrt(pow($k,2)-1),1/3))-($b/(3*$a)));
	  		echo "phương trình có một nghiệm là" . "<br>";
	  		echo "x:" . $x ;
	  	}
	  }
	  elseif ($deta < 0){
	  	echo "k:";
	  	echo $k = ((9*$a*$b*$c-2*pow($b,3)-27*pow($a,2)*$d)/(2*sqrt(pow(abs($deta),3))));
	  	echo "<br>";
	    $x = (((sqrt(abs($deta)))/(3*$a))*((pow(abs($k)+sqrt(pow($k,2)-1),1/3))+pow(abs($k)-sqrt(pow($k,2)-1),1/3))-($b/(3*$a)));
	    echo "phương trình có một nghiệm là" . "<br>";
	  	echo "x:" . $x ;

	  }
	  else {
	  	echo "k:";
	  	echo $k = ((9*$a*$b*$c-2*pow($b,3)-27*pow($a,2)*$d)/(2*sqrt(pow(abs($deta),3))));
	  	echo "<br>";
	  	$x = ((-$b+pow(sqrt(pow($b,3)-27*pow($a,2)*$d)))/(3*$a));
	  	echo "phương trình có một nghiệm là" . "<br>";
	  	echo "x:" . $x ;
	  }
	  

	}
}
giai_pt_bac3("1","-3","2","0");
?>