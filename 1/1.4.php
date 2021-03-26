<?php
if (isset($_POST["a"])&&isset($_POST["b"])) {
	echo ($_POST["a"]+$_POST["b"]."<br>");
	echo ($_POST["a"]-$_POST["b"]."<br>");
	echo ($_POST["a"]*$_POST["b"]."<br>");
	echo ($_POST["a"]/$_POST["b"]."<br>");
	echo ($_POST["a"]%$_POST["b"]."<br>");
}
?>
<html>
<body>
  <form action="1.4.php" method="post">
    <input name="a" type="number" />
    <input name="b" type="number" />
    <input type="submit"/>
    </form>
</body>
</html>