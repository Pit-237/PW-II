<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="Ex-1.php" method="get">

        <fieldset>
            <legend>Aprovado ou Reprovado</legend>
            <label for="num">Nota</label>
            <input type="num" name="num" id="num" placeholder="0" required>

        </fieldset>
    
    </form>
    <?php

    if (isset($_GET['num'])) {
        $num = $_GET['num'];

        if ($num > 7) {
            echo'Aprovado!';
        }
        elseif ($num == 6 || $num == 7) {
            echo'Recuperação';
        }
        else {
            echo'Reprovado';
        }
    }


    ?>
        

</body>
</html>