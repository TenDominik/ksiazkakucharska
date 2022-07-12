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
                Podaj nazwe przepisu:<br>
                <input type="text" name="nazwa" class="przycisk"><br>
                Podaj potrzebne składniki:<br>
                <input type="text" name="skladniki" class="przycisk2"><br>
                Podaj instrukcje do przepisu:<br>
                <input type="text" name="instrukcja" class="przycisk2"><br>
                <input type="submit" value="Zapisz przepis" class="odnosnik">
            </form>
        </div>
        <?php
            
            $c = pg_connect("user=postgres password=KxUcQ4mCJagbmusv host=db.qvgswpwdqgvglzzcykac.supabase.co port=5432 dbname=postgres");
            if(isset($_POST['nazwa']) && isset($_POST['skladniki']) && isset($_POST['instrukcja'])){
                $nazwa = $_POST['nazwa'];
                $skladniki = $_POST['skladniki'];
                $instrukcja = $_POST['instrukcja'];
                $sql = pg_query($c,"INSERT INTO przepisy (nazwa, skladniki, przygotowanie) VALUES ('$nazwa', '$skladniki', '$instrukcja');");
                pg_close($c);
            }
        ?>
    </body>
</html>