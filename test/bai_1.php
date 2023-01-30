<!DOCTYPE html>
<html>
<body>
<form action="bai_1.php" method=POST>
Nhập số nguyên tố thứ 1: <input type="number" name="nt1"><br />
Nhập số nguyên tố thứ 2: <input type="number" name="nt2"><br />
<input type="submit">
</form>
</body>
</html>
<?php
   $a =$_POST["nt1"];
   $b =$_POST["nt2"];
function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function show_prime($a, $b){
    
 if($a>$b){
    echo "error";
 }else

    for ($i = $a; $i <= $b; $i++){
        if(check_prime($i))
            echo $i , '<br>';
    }
$sum = 0;

echo "</br>Tổng các số từ $a đến $b là ";

for($i=$a; $i < $b; $i++) {
   if(check_prime($i))
$sum += $i;
}
echo "$sum";
}
echo show_prime($a, $b);

