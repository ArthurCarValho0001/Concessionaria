<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $cliente = $_POST["cliente_id_cliente"];
            $funcionario = $_POST["funcionario_id_funcionario"];
            $modelo = $_POST["modelo_id_modelo"];
            $data = $_POST["data_venda"];
            $valor = $_POST["valor_venda"];

            $sql = "INSERT INTO venda (cliente_id_cliente, funcionario_id_funcionario, modelo_id_modelo, data_venda, valor_venda) VALUES ({$cliente}, {$funcionario}, {$modelo}, '{$data}', '{$valor}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Venda cadastrada com sucesso');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }
            break;
        
        case 'editar':
            $cliente = $_POST["cliente_id_cliente"];
            $funcionario = $_POST["funcionario_id_funcionario"];
            $modelo = $_POST["modelo_id_modelo"];
            $data = $_POST["data_venda"];
            $valor = $_POST["valor_venda"];
            $id = $_POST["id_venda"];

            $sql = "UPDATE venda SET cliente_id_cliente={$cliente}, funcionario_id_funcionario={$funcionario}, modelo_id_modelo={$modelo}, data_venda='{$data}', valor_venda='{$valor}' WHERE id_venda={$id}";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Venda editada com sucesso');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM venda WHERE id_venda=".$_REQUEST["id_venda"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Venda excluída com sucesso');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }
            break;
    }
?>