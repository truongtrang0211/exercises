
<?php
if (isset ($_GET['a']), ($_GET['b']), ($_GET['c']&& is_numeric($_GET['a']))){

$a = $_GET ['a'];
$b = $_GET ['b'];
$c = $_GET ['c'];
if ($a == 0) {
	if ($b == 0 && $c==0) { 
        echo "Phương trình có vô số nghiệm";
    }
	elseif ($b ==0 && $c <>0)
		{ echo "Phương trình vô nghiệm";
    }

    else  { $nghiem = -($c)/$b ;
	echo "Nghiệm phương trình là: $nghiem";
    }
}
else { 
	$delta = $b*$b - (4*$a*$c) ;
     if ($delta < 0) {
     	echo "Phương trình vô nghiệm";
     }  
     elseif ($delta == 0) {
     	$nghiem = -($b)/(2*$a);
     	echo "Phương trình có 2 nghiệm kép: $nghiem"; 
     }
     else {
     	$nghiem1 = (-($b)-sqrt($delta)/ (2*a));
     	$nghiem2 = (-($b)+sqrt($delta)/ (2*a));
     echo "Phương trình có 2 nghiệm: $nghiem1 và $nghiem2 " ;
     }
 }
  else {
    echo "Nhập đầy đủ a b c"
}
}
?>
<html> 
    <header>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="">
        <style type="text/css"></style>
        <body>
            <script type="text/javascript"></script>
        </body>
    <p> Giải phương trình bậc 2 ax^2+bx+c=0 </p>
    </header>
</html>
<?php
 if ($count<0):
?>
<?php <p style="color:red;" > no root </p> 
} elseif ($count==0) {
    echo '1 root';
}

?>
