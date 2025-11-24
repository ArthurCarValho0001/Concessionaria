<h1>Editar Venda</h1>
<?php
    $sql = "SELECT * FROM venda WHERE id_venda=".$_REQUEST["id_venda"];
    $res = $conn->query($sql);
    $row_venda = $res->fetch_object();
?>
<form action="?page=salvar-venda" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_venda" value="<?php print $row_venda->id_venda; ?>">
    
    <div class="mb-3">
        <label>Cliente</label>
        <select name="cliente_id_cliente" class="form-control">
            <option>-- Escolha --</option>
            <?php
                $sql = "SELECT * FROM cliente";
                $res = $conn->query($sql);
                while($row = $res->fetch_object()){
                    if($row->id_cliente == $row_venda->cliente_id_cliente){
                        print "<option value='{$row->id_cliente}' selected>{$row->nome_cliente}</option>";
                    } else {
                        print "<option value='{$row->id_cliente}'>{$row->nome_cliente}</option>";
                    }
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Funcionário</label>
        <select name="funcionario_id_funcionario" class="form-control">
            <option>-- Escolha --</option>
            <?php
                $sql = "SELECT * FROM funcionario";
                $res = $conn->query($sql);
                while($row = $res->fetch_object()){
                    if($row->id_funcionario == $row_venda->funcionario_id_funcionario){
                        print "<option value='{$row->id_funcionario}' selected>{$row->nome_funcionario}</option>";
                    } else {
                        print "<option value='{$row->id_funcionario}'>{$row->nome_funcionario}</option>";
                    }
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Modelo</label>
        <select name="modelo_id_modelo" class="form-control">
            <option>-- Escolha --</option>
            <?php
                $sql = "SELECT * FROM modelo";
                $res = $conn->query($sql);
                while($row = $res->fetch_object()){
                    if($row->id_modelo == $row_venda->modelo_id_modelo){
                        print "<option value='{$row->id_modelo}' selected>{$row->nome_modelo}</option>";
                    } else {
                        print "<option value='{$row->id_modelo}'>{$row->nome_modelo}</option>";
                    }
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="data_venda" value="<?php print $row_venda->data_venda; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Valor</label>
        <input type="text" name="valor_venda" value="<?php print $row_venda->valor_venda; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>