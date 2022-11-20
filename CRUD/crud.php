<?php 
$conexao = mysqli_connect("localhost","root","","smoothies");

if(!$conexao){
    echo mysqli_connec_error();
}

function moverImg($nameImg) {
    if(isset($_FILES[$nameImg])){
        $img = $_FILES[$nameImg];
    
        if($img['size'] > 4003269){
            die("arquivo muito grande");
        }
        if($img['error']){
            die("falha ao enviar o arquivo");
        }
    
    $diretorio = "imagesUp/";
    
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
    $imagem = $novoCaminho . "." . $extensao;
    return $imagem;
    }



}

require_once 'categoriaCrud.php';
require_once 'produtoCrud.php';

?>