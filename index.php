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
                    $nazwa = strtolower($row[0]);
                    echo "
                        <li>
                            <div class='przepis'>
                                $nazwa<br>
                                <img src='przepisy/$nazwa.jpg'><br>
                                <a href='przepisy/$nazwa.php'>Zobacz cały przepis</a>
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