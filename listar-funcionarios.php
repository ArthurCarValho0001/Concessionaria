<h1>Listar Funcionário</h1>
<?php
require_once __DIR__ . '/config.php';


	$sql = "SELECT * FROM funcionario";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>E-mail</th>";
		print "<th>Telefone</th>";
		while( $row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_funcionario."</td>";
			print "<td>".$row->nome_funcionario."</td>";
			print "<td>".$row->email_funcionario."</td>";
			print "<td>".$row->telefone_funcionario."</td>";
			print "<td>";
    		print "<button class='btn btn-success' onclick=\"location.href='?page=editar-funcionario&id_funcionario={$row->id_funcionario}';\">Editar</button>";
    		print "<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')) {location.href='?page=salvar-funcionario&acao=excluir&id_funcionario={$row->id_funcionario}';}else(false);\">Excluir</button>";
    		print "</td>";
    		print "</tr>";
		}
		print"</table>";
	}else{
		print "<p>Não encontrou resultado</p>";
	}