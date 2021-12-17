<?php
echo "<center style='background-color: pink;height:25px;font-size: 25px;box-shadow: 0px 0px 10px black;padding:10px'>Your Electricity Bill with details is<center>";
//Units
	$units= $_GET["units"];
	$units_bill=$units*1000;
//bill type
	$bill_type=$_GET["billtype"];
	$discount=0;
	$dis_tab;
	$bill_type_name;
	if($bill_type=="comm"){
		$discount=0.1;
		$bill_type_name="Commerical";
		$dis_tab="10%";
	}
	else{
		$discount=0.2;
		$bill_type_name="Residential";
		$dis_tab="20%";
	}
//area
	$area=$_GET["area"];
	$area_dis=0;
	if($area=="less100"){
		$area_dis=0.05;
		$ans="less than 100";
	}
	else if($area=="more100"){
		$area_dis=0.07;
		$ans="greater than 100 and less than 200";
	}
	else{
		$area_dis=0.1;
		$ans="greater than 200";
	}
	$area_disp=$area_dis*100;
//total discount
	$total_dis=($discount+$area_dis)*100;
//item selected
	$arr_items=$_GET["item"];
	$fan_bill=0;
	$tv_bill=0;
	$heater_bill=0;
	$ac_bill=0;
    $string_item="";
	for($i=0; $i<count($arr_items);$i++){
		$val=$arr_items[$i];
		if($val=="fa-asterisk"){
			$string_item=$string_item."Fan";
			$fan_bill=120;
		}
		else if($val=="fa fa-television"){
			$string_item=$string_item."TV";
			$tv_bill=200;
		}
		else if($val=="fa fa-free-code-camp"){
			$string_item=$string_item."Heater";
			$heater_bill=250;
		}
		else if($val=="fa fa-snowflake-o"){
			$string_item=$string_item."AC";
			$ac_bill=700;
		}
		if($i!=count($arr_items)-1){
			$string_item=$string_item.", ";
		}
	}
$items_total=$heater_bill+$ac_bill+$fan_bill+$tv_bill;
//total bill
$total_wo_dis=$units_bill+$items_total;
$sub_dis=$total_wo_dis*($total_dis/100);
$total=$total_wo_dis-$sub_dis;
//table start
echo "
<center>
	<table rules='all' style='border: 1px solid black;text-align:center;margin-top:20px'>
		<tr>
			<td style='padding: 10px;'>Total Units Consumed</td>
			<td style='padding: 10px;'>$units</td>
		</tr>
		<tr style='border-bottom:3px solid black'>
			<td style='padding: 10px;'>Units Bill</td>
			<td style='padding: 10px;'>Rs.$units_bill</td>
		</tr>
		<tr>
			<td style='padding: 10px;'>Bill Type</td>
			<td style='padding: 10px;'>$bill_type_name</td>
		</tr>
		<tr style='border-bottom:3px solid black'>
			<td style='padding: 10px;'>$bill_type_name Discount</td>
			<td style='padding: 10px;'>$dis_tab
			</td>
		</tr>
		<tr>
			<td style='padding: 10px;'>Items</td>
			<td style='padding: 10px;'>$string_item</td>
		</tr>
		<tr>
			<td style='padding: 10px;'>Fan Bill is</td>
			<td style='padding: 10px;'>Rs $fan_bill</td>
		</tr>
		<tr>
			<td style='padding: 10px;'>TV Bill is</td>
			<td style='padding: 10px;'>Rs $tv_bill</td>
		</tr>
		<tr>
			<td style='padding: 10px;'>AC Bill is</td>
			<td style='padding: 10px;'>Rs $ac_bill</td>
		</tr>
		<tr style='border-bottom:3px solid black'>
			<td style='padding: 10px;'>Heater Bill is</td>
			<td style='padding: 10px;'>Rs $heater_bill</td>
		</tr>
		<tr>
			<td style='padding: 10px;'>Area Size</td>
			<td style='padding: 10px;'> $ans </td>
		</tr>
		<tr style='border-bottom:3px solid black'>
			<td style='padding: 10px;'>Area Size Discount is</td>
			<td>$area_disp%</td>
		</tr>
		<tr style='border-bottom:3px solid black'>
			<td style='padding: 10px;'>Total Discount is (discounted price)
			</td>
			<td>$total_dis% (Rs $sub_dis)</td>
		</tr>
		<tr style='background-color: #c0ffcc;border-bottom:3px solid black'>
			<td style='padding: 10px;'>Total Bill without discount is</td>
			<td>Rs $total_wo_dis</td>
		</tr>
		<tr style='background-color: pink;font-size:20px; font-weight:bold;border-bottom:3px solid black'>
			<td style='padding: 10px;'>Total Bill is</td>
			<td style='padding: 10px;'>Rs $total</td>
		</tr>
	</table>
</center>";
?>



