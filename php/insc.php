<link rel="import" href="../index.php">

<?php

/*Conexao   -   NOME DA CONEXÃO,LOGIN,SENHA,NOMEDOBANCO*/
    $con = mysqli_connect('localhost', 'root', '', 'ifce');

/*Atributos*/
$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$email = $_POST["email"];
$instEnsino = $_POST["instEnsino"];
$curso = $_POST["curso"];
$semestre = $_POST["semestre"];

$minicurso1 = $_POST["minicurso1"];
$minicurso2 = $_POST["minicurso2"];
$minicurso3 = $_POST["minicurso3"];
$minicurso4 = $_POST["minicurso4"];

/*Inserção*/

try{

    if (mysqli_connect_error()){
        return "Failed to connect to MySQL: " . mysqli_connect_error();
        header('Location: erro.php');
    }

    $sql = "INSERT INTO participante (nome, instituicao, curso, semestre, 
                                email, cidade, minicurso1, minicurso2, minicurso3, minicurso4) 
        VALUES ('$nome','$instEnsino','$curso','$semestre','$email','$cidade'
                ,'$minicurso1','$minicurso2','$minicurso3','$minicurso4')";

    if (!mysqli_query($con,$sql)){
        die('Error: ' . mysqli_error($con));
        header('Location: erro.php');
    }
    else {
        header('Location: concluido.php');
    }
}
catch(Exception $e){
    $e->header('Location: erro.php');
}

?>