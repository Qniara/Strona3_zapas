<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nela jest chora psychicznie</title>
    <link rel="stylesheet" href="b.css">
</head>
<body background="queen.jpeg">
    <a href="index.html"><input type="button" class="button" value="Powrót"></a>
    <?php
        $conn = new mysqli("localhost", "root", "", "songs") or die("Error");
        $conn->select_db("songs");
        $wynik = $conn->query("SELECT * FROM queen union SELECT * FROM depechemode union SELECT * FROM pinkfloyd union SELECT * FROM rem union SELECT * FROM gunsnroses union SELECT * FROM nirvana");
        if($wynik->num_rows>0){
            echo "<center><table>";
            echo"<tr>";
            echo"<th>ID</th>";
            echo"<th>TYTUŁ</th>";
            echo"<th>WYKONAWCA</th>";
            echo"</tr>";
            $i=1;
            while($wiersz = $wynik->fetch_assoc()){
                echo "<tr>";
                echo "<td>". $i ."</td>";
                echo "<td>". $wiersz["title"]."</td>";
                echo "<td>". $wiersz["band"]."</td>";
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