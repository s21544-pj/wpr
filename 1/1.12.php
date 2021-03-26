<?php
if (isset($_POST["a"])&&isset($_POST["b"])){
    $matrix = array();
    for ($i=0; $i < $_POST["a"]; $i++) { 
        for ($j=0; $j < $_POST["b"]; $j++) { 
            $matrix[$i][$j] = rand(-100,100);
        }
    }
    for ($i=0; $i < $_POST["a"]; $i++) { 
        for ($j=0; $j < $_POST["b"]; $j++) { 
            echo $matrix[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "<br>Transposition<br>";
    for ($i=0; $i < $_POST["b"]; $i++) { 
        for ($j=0; $j < $_POST["a"]; $j++) { 
            echo $matrix[$j][$i]." ";
        }
        echo "<br>";
    }
}
?>
<html>
<body>
  <form action="1.12.php" method="post">
    a<input name="a" type="number" min="1" />
    b<input name="b" type="number" min="1" />
    <input type="submit"/>
    </form>
</body>
</html>
