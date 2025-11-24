<h1>Editar Modelo</h1>
<?php
    $sql_modelo = "SELECT * FROM modelo WHERE id_modelo=".$_REQUEST["id_modelo"];
    $res_modelo = $conn->query($sql_modelo);
    $row_modelo = $res_modelo->fetch_object();
?>
<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_modelo" value="<?php print $row_modelo->id_modelo; ?>">
    
    <div class="mb-3">
        <label>Marca</label>
        <select name="marca_id_marca" class="form-control">
            <option>-- Escolha --</option>
            <?php
                $sql_marca = "SELECT * FROM marca";
                $res_marca = $conn->query($sql_marca);

                while($row_marca = $res_marca->fetch_object()){
                    if($row_marca->id_marca == $row_modelo->marca_id_marca){
                        print "<option value='{$row_marca->id_marca}' selected>{$row_marca->nome_marca}</option>";
                    } else {
                        print "<option value='{$row_marca->id_marca}'>{$row_marca->nome_marca}</option>";
                    }
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Nome do Modelo</label>
        <input type="text" name="nome_modelo" value="<?php print $row_modelo->nome_modelo; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Cor</label>
        <input type="text" name="cor_modelo" value="<?php print $row_modelo->cor_modelo; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Ano</label>
        <input type="text" name="ano_modelo" value="<?php print $row_modelo->ano_modelo; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tipo</label>
        <input type="text" name="tipo_modelo" value="<?php print $row_modelo->tipo_modelo; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>