<?php
if (isset($_POST["a"])){
    $dict = range('A', 'Z');
    foreach ($dict as $index => $literal) {
        if(str_contains(strtolower($_POST["a"]),strtolower($literal))){
            unset($dict[$index]);
        }
    }
    echo empty($dict) ? "True" : "False";
}
?>
<html>
<body>
  <form action="1.11.php" method="post">
    a<input name="a"/>
    <input type="submit"/>
    </form>
</body>
</html>
