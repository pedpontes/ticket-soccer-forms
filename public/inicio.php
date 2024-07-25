<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <style>
    </style>
</head>
<body>
    <form action="resultado.php" method="post">
        <label for="name">
            Nome:
            <input type="text" name="name" id="name">
        </label>
        <label for="age">
            Idade:
            <input type="number" name="age" id="age">
        </label>
        <label for="favorite-team">Seu time do coração:
            <select name="favorite-team" id="favorite-team">
                <?php
                    require "controller.php";

                    $teams = listTeams();

                    foreach ($teams as $team) {
                        echo "<option value=$team>$team</option>";
                    }
                ?>
            </select><br><br>
        </label>
        <p style="display: inline;">Sexo:</p>
        <label>
            <input type="radio" name="sexo" id="man" value="man">Homem
        </label>
        <label>
            <input type="radio" name="sexo" id="woman" value="woman">Mulher
        </label><br><br>
        <label>
            <input type="checkbox" name="ask[]" id="1" value="1">É sócio-torcedor?
        </label><br>
        <label>
            <input type="checkbox" name="ask[]" id="2" value="2">Foi a algum estádio no últimos 3 meses?
        </label><br>
        <label>
            <input type="checkbox" name="ask[]" id="3" value="3">Seu time ganhou?
        </label><br><br>
        <input type="submit" value="Gerar boleto">
    </form>
</body>
</html>