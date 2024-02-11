<?php
switch($_REQUEST["acao"]){
    case "cadastrar":
        $nome = $_REQUEST["nome"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        $data_nasc = $_REQUEST["data_nasc"];
       

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
        
        $result = $conn->query($sql);
        if($result == true){
            echo "<script>alert('Cadastro realizado com sucesso')</script>";
            header('LOCATION'. "?page=listar");
        }
        break;

    case "editar":
        $nome = $_REQUEST["nome"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        $data_nasc = $_REQUEST["data_nasc"];

        $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}', data_nasc='{$data_nasc}' WHERE id=".$_REQUEST["id"];

        $result = $conn->query($sql);
        if($result == true){
            echo "<script>alert('Editação realizada com sucesso')</script>";
            header('LOCATION'. "?page=listar");
        }
        break;

    case "excluir";

        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        $result = $conn->query($sql);
        if($result == true){
            echo "<script>alert('Excluido com sucesso')</script>";
            header('LOCATION'. "?page=listar");
        }
        break;
}
?>