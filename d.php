<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reeeeckels Lifeeee</title>
    <link rel="stylesheet" href="b.css">
</head>
<body background="nirvana.jpg">
    <a href="index.html"><input type="button" class="button" value="Powrót"></a>
    <br><br>
    <form class="form" method="post" action="d.php">
        Wybierz numer:
        <input type="text" name="n" value="<?php if (isset($_POST["n"])) echo $_POST['n'];?>">
        <input type="submit" name="baton" value="Potwierdź">
    </form>
    <br><br><br>
    <?php
    if (isset($_POST["n"])){
        $n=$_POST["n"];
        if(empty($n)){
            echo"Podaj numer.";
        }else{
            $conn= new mysqli("localhost", "root", "", "songs") or die("Error");
            $odp = $conn->query("SELECT * FROM queen union SELECT * FROM depechemode union SELECT * FROM pinkfloyd union SELECT * FROM rem union SELECT * FROM gunsnroses union SELECT * FROM nirvana");
            $i=1;
            while($odp2 = $odp->fetch_array()){
                if($i==$n){
                    echo "<center><table>";
                    echo"<tr>";
                    echo"<th>ID</th>";
                    echo"<th>TYTUŁ</th>";
                    echo"<th>WYKONAWCA</th>";
                    echo"</tr>";
                    echo "<tr>";
                    echo "<td><center>". $i ."</center></td>";
                    echo "<td><center>". $odp2["title"]."</center></td>";
                    echo "<td><center>". $odp2["band"]."</center></td>";
                    echo "</tr>";
                    echo "</table></center>";
                }
                $i++;
            }
            $conn->close();
        }
    }
    ?>
</body>
</html>