<?php
/////////////////mobile//////////////////////////
	$mob=$_POST["txtmob"];
/////////////////book////////////////////////////
	$book=$_POST["txtbook"];
/////////////////laptop//////////////////////////
	$lap=$_POST["txtlap"];
/////////////////total///////////////////////////
	$total= $mob+$book+$lap;
/////////////////discount////////////////////////
	$discount_amount= ($total*10)/100;
/////////////////net/////////////////////////////
	$discount=$total-$discount_amount;
	if(isset($_POST["findtotal"])==true){
		echo "Total Bill is ₹".$total;
	}
	else if(isset($_POST["finddis"])==true){
		echo "Discount Amount is ₹".$discount_amount;
	}
	else if(isset($_POST["findnet"])==true){
		echo "Total Bill after dicount is ₹".$discount;
	}
?>
