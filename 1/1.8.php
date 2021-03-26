<?php
if (isset($_POST["a"])&&isset($_POST["b"])&&isset($_POST["c"])){
    if($_POST["b"]>$_POST["a"]&&$_POST["b"]>$_POST["c"]&&$_POST["a"]<$_POST["c"]) echo ($_POST["b"]." _ ".$_POST["c"]." _ ".$_POST["a"].'<br>'.$_POST["a"]." _ ".$_POST["c"]." _ ".$_POST["b"]);
    else if($_POST["a"]>$_POST["b"]&&$_POST["a"]>$_POST["c"]&&$_POST["b"]>$_POST["c"]) echo ($_POST["a"]." _ ".$_POST["b"]." _ ".$_POST["c"].'<br>'.$_POST["c"]." _ ".$_POST["b"]." _ ".$_POST["a"]);
    else if($_POST["a"]>$_POST["b"]&&$_POST["a"]>$_POST["c"]&&$_POST["b"]<$_POST["c"]) echo ($_POST["a"]." _ ".$_POST["c"]." _ ".$_POST["b"].'<br>'.$_POST["b"]." _ ".$_POST["c"]." _ ".$_POST["a"]);
    else if($_POST["c"]>$_POST["a"]&&$_POST["c"]>$_POST["b"]&&$_POST["a"]>$_POST["b"]) echo ($_POST["c"]." _ ".$_POST["a"]." _ ".$_POST["b"].'<br>'.$_POST["b"]." _ ".$_POST["a"]." _ ".$_POST["c"]);
    else if($_POST["c"]>$_POST["a"]&&$_POST["c"]>$_POST["b"]&&$_POST["a"]<$_POST["b"]) echo ($_POST["c"]." _ ".$_POST["b"]." _ ".$_POST["a"].'<br>'.$_POST["a"]." _ ".$_POST["b"]." _ ".$_POST["c"]);
    else if($_POST["b"]>$_POST["a"]&&$_POST["b"]>$_POST["c"]&&$_POST["a"]>$_POST["c"]) echo ($_POST["b"]." _ ".$_POST["a"]." _ ".$_POST["c"].'<br>'.$_POST["c"]." _ ".$_POST["a"]." _ ".$_POST["b"]);
    else { echo ("Musisz podać różne liczby"); }
}
?>
<html>
<body>
  <form action="1.8.php" method="post">
    a<input name="a" type="number" />
    b<input name="b" type="number" />
    c<input name="c" type="number" />
    <input type="submit"/>
    </form>
</body>
</html>
