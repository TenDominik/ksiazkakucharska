<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="ulozenie-przycisku">
        <input type="text" name="text" class="wyszukiwarka" placeholder="Szukaj..."><br>
        <a href="dodawanie.php"><button class="odnosnik">Dodaj przepis</button></a>
        <a href="usuwanie.php"><button class="odnosnik">Usuń przepis</button></a>
        </div>
        <ul class="lista">
            <?php
                $c = pg_connect("user=postgres password=KxUcQ4mCJagbmusv host=db.qvgswpwdqgvglzzcykac.supabase.co port=5432 dbname=postgres");
                $r = pg_query($c, "select * from przepisy");
                while ($row = pg_fetch_array($r)) {
                    echo "
                        <li>
                            <div class='przepis'>
                                $row[0]<br>
                                <img src='$row[0].jpg'><br>
                                <a href='przepisy/$row[0].php'>Zobacz cały przepis</a>
                            </div>
                        </li>
                    ";
                }
                pg_close($c);
            ?>
        </ul>
        <script src="main.js"></script>
    </body>
</html>