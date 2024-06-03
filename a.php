<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kocham Kurta</title>
    <link rel="stylesheet" href="a.css">
</head>
<body background="gnr.jpg">
    <?php
        if(isset($_POST["nazwa"]) && isset($_POST["wykonawca"])){
            $title=$_POST["nazwa"];
            $band=$_POST["wykonawca"];
            $note=$_POST["ocena"];
            if(empty($title) || empty($band)){
                echo "<p>Wypełnij wsztskie pola.</p>";
            }else{
                $conn= new mysqli("localhost","root","","songs");
                if($band=="Queen"){
                    $odp = $conn->query("INSERT INTO queen (id, title, band, note) VALUES (null, '$title', '$band', '$note')");
                }
                else if($band=="Depeche Mode"){
                    $odp = $conn->query("INSERT INTO depechemode (id, title, band, note) VALUES (null, '$title', '$band', '$note')");
                }
                else if($band=="Pink Floyd"){
                    $odp = $conn->query("INSERT INTO pinkfloyd (id, title, band, note) VALUES (null, '$title', '$band', '$note')");
                }
                else if($band=="R.E.M."){
                    $odp = $conn->query("INSERT INTO rem (id, title, band, note) VALUES (null, '$title', '$band', '$note')");
                }
                else if($band=="Metallica"){
                    $odp = $conn->query("INSERT INTO rem (id, title, band, note) VALUES (null, '$title', '$band', '$note')");
                }
                else if($band=="Foo Fighters"){
                    $odp = $conn->query("INSERT INTO rem (id, title, band, note) VALUES (null, '$title', '$band', '$note')");
                }
                else if($band=="Guns N Roses"){
                    $odp = $conn->query("INSERT INTO gunsnroses (id, title, band, note) VALUES (null, '$title', '$band', '$note')");
                }
                else if($band=="Nirvana"){
                    $odp = $conn->query("INSERT INTO nirvana (id, title, band, note) VALUES (null, '$title', '$band', '$note')");
                }
                if($odp){
                    echo "Dodano utwor";
                }else{
                    echo "Nie udalo sie dodac utworu";
                }
                $conn->close();
            }
        }
    ?>
    <form method="POST" action="a.php">
        <a href="index.html"><input type="button" class="button" value="Powrót"></a>
        <h1>Podaj informacje o utworze:</h1>
        Podaj nazwe piosenki: <input type="text" name="nazwa">
        <br>
        Podaj wykonawce: <input type="text" name="wykonawca">
        <br>
        Podaj ocene: <input type="text" name="ocena">
        <br><br>
        <center>
            <input type="submit" value="Zatwierdź" name="klikowicz">
        </center>
        <br>
    </form>
</body>
</html>
