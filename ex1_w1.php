
<?php
$msg = $error = null;
if (isset ($_GET['a']) && ($_GET['b'])) { // dynamic typing
	$a = $_GET ['a'];
	$b = $_GET ['b'];
    if(is_numeric($a) && is_numeric($b)){
		if ($a == 0) {
			if ($b == 0) { 
				$msg=  "Many roots" ;
				} else {
					$msg = "No root";
						}
 		} else { 
 			$nghiem = -($b)/$a ;
			$msg = "Root is: ". $nghiem;
			}
    } else{
    $error = "a b are numeric";
    }
} else {
	$error = "Fill out a b " ;
}
?>
<html> 
	<header>
	<p> Giải phương trình bậc nhất ax+b=0 </p>
<body>
</body>
</header>
</html>
