<?php
    $data = $_POST["data"];
    $num = $_POST["num"];
    $firma = $_POST["firma"];
    $endereco = $_POST["endereco"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    $cnpj = $_POST["cnpj"];
    $inscr = $_POST["inscr"];
    $tels = $_POST["tels"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $obs = $_POST["obs"];

    file_put_contents(
        "dados.csv",
        "
$data;$num;$firma;$endereco;$complemento;$bairro;$cidade;$estado;$cep;$cnpj;$inscr;$tels;$celular;$email;$obs;",
        FILE_APPEND
    );

?>
