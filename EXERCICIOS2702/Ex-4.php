<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="Ex-4.php" method="get">

        <fieldset>
            <legend>Semestre</legend>
            <label for="num">Insira seu mês:</label>
            <input type="num" name="num" id="num" placeholder="mês" required>

        </fieldset>
    
    </form>
    <?php

    if (isset($_GET['num'])) {
        $num = $_GET['num'];

        if ($num == 'Janeiro' || $num === 'janeiro' || $num === 'fevereireiro' || $num === 'Fevereireiro' || $num === 'Marco' || $num === 'marco' || $num == 'Abril' || $num == 'abril' || $num == 'Maio' || $num == 'maio' || $num == 'Junho' || $num == 'junho') {
            echo'Este mês se encontra no Primeiro semestre';
        }
        
        elseif ($num === 'Julho' || $num === 'julho' || $num === 'Agosto' || $num === 'agosto' || $num === 'Setembro' || $num === 'setembro' || $num === 'outrubro' || $num === 'Outubro' || $num === 'Dezembro' || $num === 'dezembro' || $num === 'Novembro' || $num === 'novembro' )  {
            echo'Este mês se encontra no Segundo semestre';
        }
        else {
            echo'digite um valor valido';
        }
}

    ?>
        

</body>
</html>