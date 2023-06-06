<?php
include("connex.php");

$nome = $_POST['nome'];
$mae = $_POST['mae'];
$pai =$_POST['pai'];
$cpf = $_POST['cpf'];
$escola = $_POST['escola'];
$curso = $_POST['curso'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql="INSERT INTO cadastro(nome,mae,pai,cpf,escola,curso,email,senha)
VALUES ('$nome','$mae','$pai',$cpf,'$escola','$curso','$email','$senha')";

if (mysqli_query($connex,$sql)){

    echo"deu ruim pra poooorraaaaa".mysqli_connect_error();
}   
else{
    echo"deu bom demais";

}

?>