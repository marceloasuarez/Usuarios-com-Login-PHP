<?php
switch ($_REQUEST["acao"]) {

    case 'cadastrar':
       $nome = $_POST["nome"];
       $endereco = $_POST["endereco"];
       $email = $_POST["email"];
       $senha = md5($_POST["senha"]);
       $data_nasc = $_POST["data_nasc"];

$sql = "INSERT INTO  usuarios (nome, endereco, email, senha, data_nasc) VALUES ('{$nome}','{$endereco}','{$email}','{$senha}','{$data_nasc}')";
        
        $res = $conn->query($sql);

if ($res == true){

    echo "<script>alert('Cadastro com sucesso');
    </script>";

    echo "<script>location.href='?page=listar';</script>";
}else{
    echo "<script>alert('Não foi possivel cadastrar');</script>";

    echo "<script>location.href='?page=listar';
    </script>";
}
break;
    
        case 'editar':
       $nome = $_POST["nome"];
       $endereco = $_POST["endereco"];
       $email = $_POST["email"];
       $senha = md5($_POST["senha"]);
       $data_nasc = $_POST["data_nasc"];

  $sql = "UPDATE usuarios SET
        nome='{$nome}',
        endereco='{$endereco}',
        email='{$email}',
        senha='{$senha}',
        data_nasc='{$data_nasc}'WHERE id=".$_REQUEST["id"];
       $res = $conn->query($sql);

       if ($res == true){
       
           echo "<script>alert('Editado com sucesso');
           </script>";
       
           echo "<script>location.href='?page=listar';</script>";
       }else{
           echo "<script>alert('Não foi possivel Editar');</script>";
       
           echo "<script>location.href='?page=listar';
           </script>";
       }
            break;

        case 'excluir':
                $sql =  "DELETE FROM usuarios WHERE  id=".$_REQUEST["id"];
                $res = $conn->query($sql);
                if ($res == true){
       
                    echo "<script>alert('Excluido com sucesso');
                    </script>";
                
                    echo "<script>location.href='?page=listar';</script>";
                }else{
                    echo "<script>alert('Não foi possivel Excluir');</script>";
                
                    echo "<script>location.href='?page=listar';
                    </script>";
                }


                break;
}