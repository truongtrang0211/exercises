
<?
$msg = $error = null;
if (isset ($_GET['a'])&& ($_GET['b'])&& ($_GET['c'])){
    $a = $_GET ['a'];
    $b = $_GET ['b'];
    $c = $_GET ['c'];
    if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
        if ($a == 0) {
            if ($b == 0 && $c==0) {
                $msg = "The equation has many roots";
            }elseif ($b ==0 && $c <> 0) {
                $msg = "The equation has no root";
            }else  { $nghiem = -($c)/$b ;
                $msg = "The equation has 1 root is $nghiem";
            }
        }else { 
            $delta = $b*$b - (4*$a*$c) ;
                if ($delta < 0) {
                    $msg = "No root";
                }elseif ($delta == 0) {
                    $nghiem = -($b)/(2*$a);
                    $msg = "2 root are duplicated: $nghiem" ;
                }else {
                    $nghiem1 = (-($b)-sqrt($delta)/ (2*a));
                    $nghiem2 = (-($b)+sqrt($delta)/ (2*a));
                    $msg = "2 roots: $nghiem1 and $nghiem2" ;
        }
                }
        }else{
    $error = " a b c are numeric"; 
            }
    } else {
          $error =  "Fill out a b c"; 

        }
?>
<style type="text/css">
    .fillout {
        background: blue;
        margin-left: 50px;
        width: 400px;
        height: 200px;
        padding: 10 px;
    }
</style>
<html> 
    <header>
        <title> eq2 </title>
        <meta charset="utf-8">
         <body>
            <h1 style="font-family:courier; color:green;">Giải phương trình bậc hai ax^2 + bx + c = 0</h1>
            <h4 class="error"><?php echo $error ?></h4>
         <form action="ex2_w2.php" class="fillout" method="_GET">
        <table cellpadding="4" cellspacing="4" border="1" >
            <tr>
                <td> Nhập a </td>
                <td> <input class="nhapa" type="text" name ="a" size ="20" placeholder="nhập 1 số" /> </td>
            </tr>
            <tr>
                <td> Nhập b </td>
                <td> <input class="nhapb" type="text" name="b" size="20" placeholder="nhập 1 số" /> </td>
            </tr>
            <tr>
                <td> Nhập c </td>
                <td> <input class="nhapc" type="text" name="c" size="20" placeholder=" nhập 1 số" /> </td>
            </tr>
        </table>
         <input type="submit" value="Tính nghiệm"  />
         <input type="reset" value="Nhập lại"/>
        </form>
        <h4 class="msg"><?php echo $msg ?> </h4>
        </body>
    </header>
</html>
