<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="Ex-2.php" method="get">

        <fieldset>
            <legend>Pode votar?</legend>
            <label for="num">Idade</label>
            <input type="num" name="num" id="num" placeholder="0" required>

        </fieldset>
    
    </form>
    <?php

    if (isset($_GET['num'])) {
        $num = $_GET['num'];

        if ($num > 17) {
            echo'Votação obrigatoria';
        }
        elseif ($num == 16 || $num == 17) {
            echo'Votação Opcional';
        }
        else {
            echo'Não pode votar';
        }
    }


    ?>
        

</body>
</html>