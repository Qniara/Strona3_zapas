<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pupcia</title>
    <link rel="stylesheet" href="b.css">
</head>
<body background="queen.jpeg">
    <a href="index.html"><input type="button" class="button" value="Powrót"></a><br><br>
    <ul>
        <li><a href="b.php">Wszystko</a></li>
        <li><a href="b1.php">Queen</a></li>
        <li><a href="b2.php">Depeche Mode</a></li>
        <li><a href="b3.php">Pink Floyd</a></li>
        <li><a href="b4.php">R.E.M.</a></li>
        <li><a href="b8.php">Foo Fighters</a></li>
        <li><a href="b5.php">Metallica</a></li>
        <li><a href="b6.php">Guns N' Roses</a></li>
        <li><a href="b7.php">Nirvana</a></li>
    </ul><br><br>
    <?php
        $conn = new mysqli("localhost", "root", "", "songs") or die("Error");
        $conn->select_db("songs");
        $wynik = $conn->query("SELECT * FROM gunsnroses");
        if($wynik->num_rows>0){
            echo "<center><table>";
            echo"<tr>";
            echo"<th>ID</th>";
            echo"<th>TYTUŁ</th>";
            echo"<th>WYKONAWCA</th>";
            echo"<th>OCENA</th>";
            echo"</tr>";
            $i=1;
            while($wiersz = $wynik->fetch_assoc()){
                echo "<tr>";
                echo "<td><center>". $i ."</center></td>";
                echo "<td>". $wiersz["title"]."</td>";
                echo "<td><center>". $wiersz["band"]."</center></td>";
                echo "<td><center>". $wiersz["note"]."</center></td>";
                echo "</tr>";
                $i++;
            }
            echo "</table></center>";
        }else{
            echo "Nie mo nic";
        }
        $conn->close();
    ?>
</body>
</html>