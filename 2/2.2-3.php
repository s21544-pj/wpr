<!DOCTYPE html>
<html>
<body>
<p>
            <text>Zadanie 2.2 i 2.3</text>
            
            <form action="2.2-3.php" method="post">
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
$numberOfPeople = $_POST['numberOfPeople'];
$date = $_POST['date'];
$lenght = $_POST['lenght'];
$adress = $_POST['adress'];
$card = $_POST['card'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$child = $_POST['child'];
$dodatki = $_POST['dodatki'];

echo "<tr><td>Imię: </td><td>$name</td></tr><tr><td> Nazwisko:</td><td> $surname</td></tr><tr><td> Liczba osób:</td><td> $numberOfPeople</td></tr><tr><td> Data:</td><td> $date</td></tr><tr><td> Ilość nocy:</td><td> $lenght</td></tr><tr><td> Adres:</td><td> $adress</td></tr><tr><td> Numer karty:</td><td> $card</td></tr><tr><td> Email:</td><td> $email</td></tr><tr><td> numer telefonu: </td><td> $phone</td></tr><tr><td> Czy łóżeczko</td><td> $child</td>";
foreach ($dodatki as $key => $value) {
    echo "<tr><td> $key </td><td> $value</td></tr>";
}
}
if (isset($_POST['name1']) && isset($_POST['surname1'])) {
    $name = $_POST['name1'];
    $surname = $_POST['surname1'];
    echo "<tr><td>$name</td><td>$surname</td></tr>";
 }
 if (isset($_POST['name2']) && isset($_POST['surname2'])) {
    $name = $_POST['name2'];
    $surname = $_POST['surname2'];
    echo "<tr><td>$name</td><td>$surname</td></tr>";
 }
 if (isset($_POST['name3']) && isset($_POST['surname3'])) {
    $name = $_POST['name3'];
    $surname = $_POST['surname3'];
    echo "<tr><td>$name</td><td>$surname</td></tr>";
 }
 if (isset($_POST['name4']) && isset($_POST['surname4'])) {
    $name = $_POST['name4'];
    $surname = $_POST['surname4'];
    echo "<tr><td>$name</td><td>$surname</td></tr>";
 }
?>
         
        </table>
<form action='2.2-3.php' method='post'>
<?php
if (isset($_POST['numberOfPeople'])) {
    for ($i=1; $i <= $_POST['numberOfPeople']; $i++) { 
        echo $i.' Imię: <input type="text" name="name$i" reqiured><br>
                '.$i.' nazwisko: <input type="text" name="surname$i" reqiured><br>';
    }
    echo '<input type="submit" value="Dodaj">';
}
?>
</form>
    </body>
</html>