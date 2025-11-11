<?php 
	
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome	= $_POST['nome_cliente'];
			$email	= $_POST['email_cliente'];
			$telefone = $_POST['telefone_cliente'];

			$sql = "INSERT INTO cliente (nome_cliente, email_cliente, telefone_cliente)
					VALUES ('{$nome}', '{$email}', '{$telefone}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-cliente';</script>";
			}else{
				print "<script>alert('Não cadastrou');</script>";
				print "<script>location.href='?page=listar-cliente';</script>";
			}
			break;
		
		case 'editar':
			# code...
			break;

		case 'excluir':
			# code...
			break;
	}