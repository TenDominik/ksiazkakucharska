<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="przepisy.css">
    </head>
    <body>
    <a href="../index.php"><button class="odnosnik">Strona głowna</button></a>
        <?php
            $c = pg_connect("user=postgres password=KxUcQ4mCJagbmusv host=db.qvgswpwdqgvglzzcykac.supabase.co port=5432 dbname=postgres");
            $r = pg_query($c, "select * from przepisy where nazwa = 'Pierogi'");
            $row = pg_fetch_array($r);
            $skladniki = explode(",",$row[1]);
            echo "<h1>$row[0]</h1><br>";
            foreach ($skladniki as &$value) {
                echo "$value<br>";
            }
            echo"<br><br>$row[2]";
            echo"<br><br><img src='$row[0].jpg'>"
        ?>
    </body>
</html>