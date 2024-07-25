<?php
    require "controller.php";

    if($_POST){
        // print_r($_POST);
        if(isset($_POST["name"]) && isset($_POST["favorite-team"]) && isset($_POST['age']) && isset($_POST["sexo"]) && isset($_POST["ask"]))
            $name = $_POST["name"];
            $team = $_POST["favorite-team"];
            $sexo = $_POST["sexo"];
            $age = $_POST["age"];
            $ask = $_POST["ask"];


            $value = 120;
            $desc = 0;

            $sexo = $sexo == "woman" ? "Mulher" : "Homem";
            
            $desc+= testAge($age);
            $desc+= testSexo($sexo);
            $desc+= testAsk($ask);

            $total = $value - ($desc/100)*$value;
            
            echo "<div>
                    Nome: $name <br>
                    Time: $team <br>
                    Sexo: $sexo <br>
                    Idade: $age <br>
                    <br>
                    Desconto: $desc% <br>
                    Total a pagar: $total
                </div>";
    }
?>