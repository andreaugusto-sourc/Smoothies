<?php
require_once 'CRUD/crud.php';

$nomeProd = $_POST['nomeProd'];
$descProd = $_POST['descProd'];
$precoProd = $_POST['precoProd'];

if(isset($_FILES["imgProd"])){
    $img = $_FILES['imgProd'];

    if($img['size'] > 4003269){
        die("arquivo muito grande");
    }
    if($img['error']){
        die("falha ao enviar o arquivo");
    }

$diretorio = "images/";

$imgCaminho = $img['name'];

$novoCaminho = uniqid();

$extensao = strtolower(pathinfo($imgCaminho, PATHINFO_EXTENSION));
if($extensao != "jpg" && $extensao != "png" && $extensao != "webp"){
    die("arquivo invalido");
}

$alocar =  move_uploaded_file($img['tmp_name'], $diretorio . $novoCaminho . "." . $extensao);
if($alocar){
    echo "sucesso na alocação";

}else{
    echo "falha na alocação";
}
}

$imgProd = $novoCaminho . "." . $extensao;
$idCat = $_POST["idCat"];
$idCat = preg_replace("/[A-Za-z\-]+/","",$idCat);

$resultado = addProd($conexao,$nomeProd,$descProd,$precoProd,$imgProd,$idCat);

if($resultado){
    echo "Sucesso!";
}else{
    echo "Erro";
}
?>