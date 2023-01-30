<!DOCTYPE html>
<html>
<body>

<form action="bai_2.php" method=POST>
Nhập vào số dòng: <input type="number" name="soDong"><br />
<input type="submit">
</form>


</body>
</html>

<?php
    $n= $_POST["soDong"];
    if($n>10){
        echo"error";
    }else

    for($i=0; $i<=$n; $i++) {
        for($j=0; $j<$i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>