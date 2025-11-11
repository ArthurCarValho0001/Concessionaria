<h1>Listar Marca</h1>
<?php
	$sql = "SELECT * FROM marca";

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
			print "<td>".$row->id_marca."</td>";
			print "<td>".$row->nome_marca."</td>";
			print "</tr>";
		}
		print"</table>";
	}else{
		print "<p>Não encontrou resultado</p>";
	}