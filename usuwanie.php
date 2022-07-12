<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="dodawanie">
        <a href="index.php"><button class="odnosnik">Strona głowna</button></a>
            <form action="" method="post" class="dodawanie">
                Podaj nazwe przepisu który chcesz usunąć:<br>
                <input type="text" name="nazwa" class="przycisk"><br>
                <input type="submit" value="Usuń przepis" class="odnosnik">
            </form>
        </div>
        <?php
            $c = pg_connect("user=postgres password=KxUcQ4mCJagbmusv host=db.qvgswpwdqgvglzzcykac.supabase.co port=5432 dbname=postgres");
            if(isset($_POST['nazwa'])){
                $nazwa = $_POST['nazwa'];
                $sql = pg_query($c,"DELETE from przepisy where nazwa = '$nazwa'");
                pg_close($c);
            }
        ?>
    </body>
</html>