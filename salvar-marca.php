<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome_marca"];

            $sql = "INSERT INTO marca (nome_marca) VALUES ('{$nome}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Marca cadastrada com sucesso');</script>";
                print "<script>location.href='?page=listar-marca';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar-marca';</script>";
            }
            break;
        
        case 'editar':
            $nome = $_POST["nome_marca"];
            $id = $_POST["id_marca"];

            $sql = "UPDATE marca SET nome_marca='{$nome}' WHERE id_marca={$id}";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Marca editada com sucesso');</script>";
                print "<script>location.href='?page=listar-marca';</script>";
            }else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar-marca';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM marca WHERE id_marca=".$_REQUEST["id_marca"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Marca excluída com sucesso');</script>";
                print "<script>location.href='?page=listar-marca';</script>";
            }else{
                print "<script>alert('Não foi possível excluir. Verifique se existem modelos vinculados a esta marca.');</script>";
                print "<script>location.href='?page=listar-marca';</script>";
            }
            break;
    }
?>