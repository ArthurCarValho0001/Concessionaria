<h1>Listar venda</h1>
<?php
	$sql = "SELECT * FROM venda";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		while( $row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_venda."</td>";
			print "<td>".$row->nome_venda."</td>";
			print "</tr>";
		}
		print"</table>";
	}else{
		print "<p>Não encontrou resultado</p>";
	}