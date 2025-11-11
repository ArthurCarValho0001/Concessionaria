<h1>Editar Funcionários</h1>
<?php
    $sql = "SELECT * FROM funcionarios id_funcionario=" . $_REQUEST['id_funcionario'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-funcionario" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_funcionario" value="<?php print $row->id_funcionario; ?>">
    <div class="mb-3">
        <label>Nome do Funcionário
        <input type="text" name="nome_funcionario" class="form-control" value="<?php print $row->nome_funcionario; ?>" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>E-mail
        <input type="email" name="email" class="form-control"  value="<?php print $row->email; ?>" class="form-control">
        </label>

    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" class="form-control"  value="<?php print $row->telefone_funcionario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>