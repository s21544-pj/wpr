<?php
if (isset($_POST["a"])&&isset($_POST["b"])){
	echo ("%".$_POST["b"]." ".$_POST["a"]."%$#");
}
?>
<html>
<body>
  <form action="1.5.php" method="post">
    <input name="a" />
    <input name="b" />
    <input type="submit"/>
    </form>
</body>
</html>
