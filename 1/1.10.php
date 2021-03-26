<?php
if (isset($_POST["a"])){
    for ($i = 0; $i < $_POST["a"]; $i++) {
        for($j = 0; $j<=$i; $j++){
            echo "*";
        }
    echo "<br>";
    }
    for($i=0; $i<$_POST["a"]; $i++){
        for($j=$_POST["a"]; $j>$i; $j--){
            echo "*";
        }
    echo "<br>";
    }
    for ($i = 0; $i < $_POST["a"]; $i++) {
        for($j=0; $j<$_POST["a"]; $j++){
            if($j<$i) echo "&nbsp";
                else echo "*";
        }
        echo "<br>";
    }
    for($i=$_POST["a"];$i>0;$i--){
        for($j=$i;$j>1;$j--)
            echo '&nbsp;';
        for($j=$i;$j<$_POST["a"];$j++)
            echo '*'; 
        echo '*<br/>';
    }
}
?>
<html>
<body>
  <form action="1.10.php" method="post">
    a<input name="a" type="number" min="1" />
    <input type="submit"/>
    </form>
</body>
</html>
