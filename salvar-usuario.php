<?php

switch ($_REQUEST["acao"]){

    case 'cadastrar':

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $senha = md5($_POST["senha"]);
    
        $sql = "INSERT INTO tb_cadastro (nome, email, cpf, senha) VALUES ('{$nome}','{$email}','{$cpf}','{$senha}')";

        $res = $conn->query($sql);
        
        if($res==true){
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } 
        else{
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'editar':

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $senha = md5($_POST["senha"]);
        
        $sql = "UPDATE tb_cadastro SET
                    nome='{$nome}',
                    email='{$email}',
                    cpf='{$cpf}',
                    senha='{$senha}'
                 WHERE
                    id=".$_REQUEST["id"];   
        
        $res = $conn->query($sql);
        
        if($res==true){
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } 
        else{
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'excluir':

        $sql = "DELETE FROM tb_cadastro WHERE id=".$_REQUEST["id"];
       
        $res = $conn->query($sql);
        
        if($res==true){
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else{
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;     
}
?>