<html> 
<header>
	<p> Đếm số ngày trong tháng bằng if else </p>
<body>
<?php
$month = $_GET ['month'];
if ($month > 0 && $month <=12){
	if ($month == 2){
	echo "Tháng 2 có 28 hoặc 29 ngày"  ;
}
else if ($month == 1|| $momth == 3|| $month == 5|| $month ==7 || $month ==8|| $month== 10 || $month==12) {
	echo "Tháng $month có 31 ngày" ;
}

else {
    echo "Tháng $month có 30 ngày";
}
}
?>

</body>
</header>
</html>
