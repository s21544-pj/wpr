<?php
if (isset($_POST["first"]) && isset($_POST["second"]) && isset($_POST["action"])) {
    switch ($_POST["action"]){
        case "+":
        $result = $_POST["first"] + $_POST["second"];
        break;
        case "-":
        $result = $_POST["first"] - $_POST["second"];
        break;
        case "*":
        $result = $_POST["first"] * $_POST["second"];
        break;
        case "/":
        if ($_POST["second"]!= 0) {
            $result = $_POST["first"] / $_POST["second"];
        }else{
            echo "Nie mozna dzielic przez 0!";
        }
        break;
    }
    echo $result;
} 
?>
<!DOCTYPE html>
<html>
<body>
<p>
            <text>Zadanie 2.1</text>
            <form action="2.1.php" method="post">
                <input type="number" name="first">
                <input type="number" name="second"><br>
                <input type="radio" id="action1" name="action" value="+">
                <label for="action1">+</label><br>
                <input type="radio" id="action2" name="action" value="-">
                <label for="action2">-</label><br>  
                <input type="radio" id="action3" name="action" value="*">
                <label for="action3">*</label><br>
                <input type="radio" id="action4" name="action" value="/">
                <label for="action4">/</label>
                <input type="submit" name="sub">
            </form>
        </p>
    </body>
</html>