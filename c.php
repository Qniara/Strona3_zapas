<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kocham Bażanty</title>
    <link rel="stylesheet" href="b.css">
</head>
<body background="slash.jpg">
    <a href="index.html"><input type="button" class="button" value="Powrót"></a>
    <br><br>
    <form>
        <center><input type="submit" value="Losuj" name="batonik"></center>
    </form> <br><br>
    <?php
        $n=rand(1,36);
        $conn= new mysqli("localhost", "root", "", "songs") or die("Błąd");
        $odp = $conn->query("SELECT * FROM queen union SELECT * FROM depechemode union SELECT * FROM pinkfloyd union SELECT * FROM rem union SELECT * FROM metallica union SELECT * FROM foofighters union SELECT * FROM gunsnroses union SELECT * FROM nirvana");
        $i=1;
        while($odp2 = $odp->fetch_array()){
            if($i==$n){
                echo "<center><table>";
                echo"<tr>";
                echo"<th>ID</th>";
                echo"<th>TYTUŁ</th>";
                echo"<th>WYKONAWCA</th>";
                echo"<th>OCENA</th>";
                echo"</tr>";
                echo "<tr>";
                echo "<td><center>". $i ."</center></td>";
                echo "<td><center>". $odp2["title"]."</center></td>";
                echo "<td><center>". $odp2["band"]."</center></td>";
                echo "<td><center>". $odp2["note"]."</center></td>";
                echo "</tr>";
                echo "</table></center>";
            }
            $i++;
        }
        $conn->close();
    ?>
</body>
</html>
