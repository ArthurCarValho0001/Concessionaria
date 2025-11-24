<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $marca = $_POST["marca_id_marca"];
            $nome = $_POST["nome_modelo"];
            $cor = $_POST["cor_modelo"];
            $ano = $_POST["ano_modelo"];
            $tipo = $_POST["tipo_modelo"];

            $sql = "INSERT INTO modelo (marca_id_marca, nome_modelo, cor_modelo, ano_modelo, tipo_modelo) VALUES ({$marca}, '{$nome}', '{$cor}', '{$ano}', '{$tipo}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Modelo cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar-modelo';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar-modelo';</script>";
            }
            break;
        
        case 'editar':
            $marca = $_POST["marca_id_marca"];
            $nome = $_POST["nome_modelo"];
            $cor = $_POST["cor_modelo"];
            $ano = $_POST["ano_modelo"];
            $tipo = $_POST["tipo_modelo"];
            $id = $_POST["id_modelo"];

            $sql = "UPDATE modelo SET marca_id_marca={$marca}, nome_modelo='{$nome}', cor_modelo='{$cor}', ano_modelo='{$ano}', tipo_modelo='{$tipo}' WHERE id_modelo={$id}";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Modelo editado com sucesso');</script>";
                print "<script>location.href='?page=listar-modelo';</script>";
            }else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar-modelo';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM modelo WHERE id_modelo=".$_REQUEST["id_modelo"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Modelo excluído com sucesso');</script>";
                print "<script>location.href='?page=listar-modelo';</script>";
            }else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar-modelo';</script>";
            }
            break;
    }
?>