<?php

    function listTeams() {
        $teams = [
            "Botafogo",
            "Palmeiras",
            "Flamengo",
            "Fortaleza",
            "Fortaleza", 
            "São Paulo",
            "Bahia",
            "Cruzeiro",
            "Corinthians",
            "Gremio"
        ];

        return $teams;
    }

    function testAge($age){
        return $age >= 18 ? 0 : 30;
    }

    function testSexo($sexo){
        return $sexo == "Mulher" ? 20 : 0;
    }

    function testAsk($ask){
        $total = 0;
        if(isset($ask[0]) && $ask[0] == 1)
            $total+= 5;
        if(isset($ask[1]) && $ask[1] == 2)
            $total+= 5;
        if(isset($ask[2]) && $ask[2] == 3)
            $total+=2;
        return $total;
    }

?>