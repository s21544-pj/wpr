<?php
if (isset($_POST["a"])&&isset($_POST["b"])&&isset($_POST["c"])){
	if (($_POST["a"]+$_POST["b"]>$_POST["c"])&&($_POST["a"]+$_POST["c"]>$_POST["b"])&&($_POST["b"]+$_POST["c"]>$_POST["a"]) ) {
		echo "Mozna zbudowac trójkąt z podanych boków";
	}else{
		echo "BŁĄD";
	}
}
?>
<html>
<body>
  <form action="1.6.php" method="post">
    a<input name="a" type="number" />
    b<input name="b" type="number" />
    c<input name="c" type="number" />
    <input type="submit"/>
    </form>
</body>
</html>
