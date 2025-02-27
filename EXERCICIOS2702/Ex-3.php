<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="Ex-3.php" method="get">

        <fieldset>
            <legend>< ou > que 100?</legend>
            <label for="num">Insira seu numero:</label>
            <input type="num" name="num" id="num" placeholder="0" required>

        </fieldset>
    
    </form>
    <?php

    if (isset($_GET['num'])) {
        $num = $_GET['num'];

        if ($num > 100) {
            echo'Seu numero é maior que 100';
        }
        elseif ($num == 100) {
            echo'Seu numero é 100';
        }
        else {
            echo'Seu numero é menor que 100';
        }
    }


    ?>
        

</body>
</html>