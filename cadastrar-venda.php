<h1>Cadastrar Venda</h1>
<form action="?page=salvar-venda" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label>Cliente</label>
        <select name="cliente_id_cliente" class="form-control">
            <option>-- Escolha o Cliente --</option>
            <?php
                $sql = "SELECT * FROM cliente";
                $res = $conn->query($sql);
                while($row = $res->fetch_object()){
                    print "<option value='{$row->id_cliente}'>{$row->nome_cliente}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Funcionário</label>
        <select name="funcionario_id_funcionario" class="form-control">
            <option>-- Escolha o Funcionário --</option>
            <?php
                $sql = "SELECT * FROM funcionario";
                $res = $conn->query($sql);
                while($row = $res->fetch_object()){
                    print "<option value='{$row->id_funcionario}'>{$row->nome_funcionario}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Modelo do Carro</label>
        <select name="modelo_id_modelo" class="form-control">
            <option>-- Escolha o Modelo --</option>
            <?php
                $sql = "SELECT * FROM modelo";
                $res = $conn->query($sql);
                while($row = $res->fetch_object()){
                    print "<option value='{$row->id_modelo}'>{$row->nome_modelo}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Data da Venda</label>
        <input type="date" name="data_venda" class="form-control">
    </div>

    <div class="mb-3">
        <label>Valor (R$)</label>
        <input type="text" name="valor_venda" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Finalizar Venda</button>
    </div>
</form>