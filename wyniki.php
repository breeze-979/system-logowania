<?php
session_start();
if (isset($_SESSION["login"])) {
    echo "witaj ".$_SESSION["login"];
} else {
    header("location: login.php");
}
$conn = mysqli_connect("localhost", "root", "", "laboratorium")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Imie Pacjenta</th>
            <th>Nazwisko Pacjenta</th>
            <th>Pesel</th>
            <th>Data zlecenia</th>
            <th>Data wykonania</th>
            <th>Wynik</th>
        </tr>
    <?php
        $zapytanie = "SELECT imie, nazwisko, pesel, Zlecenie.data, Wynik.data, plik FROM Pacjent JOIN Zlecenie ON Zlecenie.idPacjenta = Pacjent.id LEFT JOIN Wynik ON Zlecenie.id = Wynik.idZlecenia;";
        $result = mysqli_query($conn, $zapytanie);
        while ($wiersz = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>";
            echo $wiersz[0];
            echo "</td>";
            echo "<td>";
            echo $wiersz[1];
            echo "</td>";
            echo "<td>";
            echo $wiersz[2];
            echo "</td>";
            echo "<td>";
            echo $wiersz[3];
            echo "</td>";
            echo "<td>";
            echo $wiersz[4];
            echo "</td>";
            echo "<td>";
            echo "<a href='$wiersz[5]'>wyniki</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>
<?php
mysqli_close($conn)
?>