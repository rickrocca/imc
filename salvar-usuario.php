<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $altura = $_POST["altura"];
            $peso = $_POST["peso"];

            $imc = $peso/($altura * $altura);
            
            $sql ="INSERT INTO usuario (usuario, senha, email, altura, peso, imc) 
            VALUES ('{$nome}','{$senha}','{$email}','{$altura}','{$peso}','{$imc}')";

            $res = $conexao->query($sql);
            if($res==true){
                print "<script>alert('Registrado com sucesso');</script>";
                print "<script>location.href='?page=login';</script>";
            }else{
                print "<script>alert('Não foi possível registrar');</script>";
                print "<script>location.href='?page=novo';</script>";
            }
            break;
        
        default:
            # code...
            break;
    }
?>