<?php
if (isset($_POST["a"])&&isset($_POST["b"])){
	echo ($_POST["a"]*$_POST["b"]);
}
?>
<html>
<body>
  <form action="1.2.php" method="post">
    <input name="a" type="number" />
    <input name="b" type="number" />
    <input type="submit"/>
    </form>
</body>
</html>
