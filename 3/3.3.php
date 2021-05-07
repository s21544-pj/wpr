<!DOCTYPE html>
<html>
<body>
<p>
            <text>Zadanie 3.3</text>
            
            <form action="3.3.php" method="post">
                Imię: <input type="text" name="name" reqiured><br>
                Nazwisko: <input type="text" name="surname" reqiured><br>
                Ilość osób: <select name="numberOfPeople">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select><br>
               Data przyjadu:<input type="date" name="date" size="5" reqiured><br>
                Ilość nocy: <select name="lenght">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                </select><br>
                Adres: <input type="text" name="adress" reqiured><br>
                Nr karty: <input type="number" name="card" min=0000000000000000 max=9999999999999999 reqiured><br>
                Email kontaktowy: <input type="email" name="email" reqiured><br>
                Numer phoneefonu <input type="number" name="phone" min=000000000 max=999999999 reqiured><br>
                Dodatkowe łóżko dla dziecka? <input type="checkbox" name="child" value="tak"><br>
                Dodatki: <select multiple name='dodatki[]' size=5>
                    <option value='klimatyzacja'>klimatyzacja</option>
                    <option value='popelniczka'>popelniczka</option>
                    <option value='czajnik'>czajnik</option>
                </select><br>

                <input type="submit" value="Prześlij">
            </form>
            </p>
            <table>
<?php
if (isset($_POST['name']) && isset($_POST['surname'])) {
$name = $_POST['name'];
$surname = $_POST['surname'];
$ilberOfPeople = $_POST['numberOfPeople'];
$date = $_POST['date'];
$lenght = $_POST['lenght'];
$adress = $_POST['adress'];
$card = $_POST['card'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$child = $_POST['child'];
$dodatki = $_POST['dodatki'];

echo "<tr><td>Imię: </td><td>$name</td></tr><tr><td> Nazwisko:</td><td> $surname</td></tr><tr><td> Liczba osób:</td><td> $ilberOfPeople</td></tr><tr><td> Data:</td><td> $date</td></tr><tr><td> Ilość nocy:</td><td> $lenght</td></tr><tr><td> Adres:</td><td> $adress</td></tr><tr><td> Numer karty:</td><td> $card</td></tr><tr><td> Email:</td><td> $email</td></tr><tr><td> numer telefonu: </td><td> $phone</td></tr><tr><td> Czy łóżeczko</td><td> $child</td>";
foreach ($dodatki as $key => $value) {
    echo "<tr><td> $key </td><td> $value</td></tr>";

}
$fp = fopen('dane.csv', 'a');
fwrite($fp, $name);
fwrite($fp, ";");
fwrite($fp, $surname);
fwrite($fp, ";");
fwrite($fp, $ilberOfPeople);
fwrite($fp, ";");
fwrite($fp, $date);
fwrite($fp, ";");
fwrite($fp, $lenght);
fwrite($fp, ";");
fwrite($fp, $adress);
fwrite($fp, ";");
fwrite($fp, $card);
fwrite($fp, ";");  
fwrite($fp, $email);
fwrite($fp, ";");  
fwrite($fp, $phone);
fwrite($fp, ";");  
fwrite($fp, $child);
fwrite($fp, ";"); 
fwrite($fp, implode(",", $dodatki));
fwrite($fp, "\n");
}

?>
        </table>
<form action="3.3.php" method="post">
            <br>Wczytaj dane
            <input type="submit" value="Pokaz" name="view" />
</form>
<table border="1">
<?php
$row = 1;
if (isset($_POST["view"])) {
if (($handler = fopen("dane.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handler, 100, ";")) !== FALSE) {
        $il = count($data);
        echo "<tr>";
        $row++;
        for ($j=0; $j < $il; $j++) {
            echo "<td>". $data[$j] . "</td>";
        }
        echo "</tr>";
    }
    fclose($handler);
}}
?>
</table>
    </body>
</html>