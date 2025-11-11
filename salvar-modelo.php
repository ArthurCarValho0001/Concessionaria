<?php 
	
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome	= $_POST['nome_modelo'];
			$email	= $_POST['email_modelo'];
			$telefone = $_POST['telefone_modelo'];

			$sql = "INSERT INTO modelo (nome_modelo, email_modelo, telefone_modelo)
					VALUES ('{$nome}', '{$email}', '{$telefone}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-modelo';</script>";
			}else{
				print "<script>alert('Não cadastrou');</script>";
				print "<script>location.href='?page=listar-modelo';</script>";
			}
		break;
		
		case 'editar':
			$nome = $_POST['nome_modelo'];
			$email = $_POST['email_modelo'];
			$telefone = $_POST['telefone_modelo'];

			$sql = "UPDATE modelo SET nome_modelo='{$nome}', email_modelo='{$email}', telefone_modelo='{$telefone}' WHERE id_modelo='".$_REQUEST['id_modelo']."'";
			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-modelo';</script>";
			}else{
				print "<script>alert('Não editou');</script>";
				print "<script>location.href='?page=listar-modelo';</script>";
			}
		break;

		case 'excluir':
    		$sql = "DELETE FROM modelo WHERE id_modelo='".$_REQUEST['id_modelo']."'";
    		$res = $conn->query($sql);

    		if($res == true){
        	print "<script>alert('Excluiu com sucesso!');</script>";
        	print "<script>location.href='?page=listar-modelo';</script>";
    	}else{
        	print "<script>alert('Não excluiu');</script>";
        	print "<script>location.href='?page=listar-modelo';</script>";
    	}
    	break;
	}