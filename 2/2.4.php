<?php
if (isset($_POST["first"])) {
    if (is_int((int) $_POST["first"]) && ($_POST["first"]>0)) {
        $pierwsza = true;
        $counter = 0;
        if($_POST["first"]<2) $pierwsza = false;
        for($i=2;$i*$i<=$_POST["first"];$i++){
            $counter++;
            if(($_POST["first"]%$i)==0){ 
                $pierwsza = false;
                break;
            }
        }
        if ($pierwsza) {
            echo "Liczba jest pierwsza i zajeło to $counter obrotow petli";
        }else{
            echo "Liczba nie jest pierwsza i zajeło to $counter obrotow petli";
        }
    }else{
        echo "blad - podaj liczbe calkowita dodatnia!";
    }
} 
?>
<!DOCTYPE html>
<html>
<body>
<p>
            <text>Zadanie 2.4</text>
            <form action="2.4.php" method="post">
                <input type="number" name="first">
                <input type="submit" name="sub">
            </form>
        </p>
    </body>
</html>