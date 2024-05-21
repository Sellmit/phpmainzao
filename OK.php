<?php

$usuario = "adm";
$senha;

if (isset ($usuario) AND isset ($senha)) {

if ($usuario == "adm" AND $senha == 123) {
    echo "bem vindo";
}

else {
    echo "usuario ou senha inv";
}

}
else {
    echo "campos n preenchidos";
}


?>