<!DOCTYPE html>
<html>
<body>
<p>
            <text>Zadanie 3.2</text>
            <form action="3.2.php" method="post">
                <input type="text" name="first">
                <input type="text" name="second"><br>
                <input type="submit" name="sub">
            </form>
        </p>
    </body>
</html>
<?php
if (isset($_POST["first"]) && isset($_POST["second"])) {
$file = fopen('przyklad.txt', 'a');
fwrite($file, $_POST["first"]);
fwrite($file, $_POST["second"]);
fwrite($file, "\n");
fclose($file);
} 
?>