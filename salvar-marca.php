<?php 
	
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome	= $_POST['nome_marca'];
			$email	= $_POST['email_marca'];
			$telefone = $_POST['telefone_marca'];

			$sql = "INSERT INTO marca (nome_marca, email_marca, telefone_marca)
					VALUES ('{$nome}', '{$email}', '{$telefone}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-marca';</script>";
			}else{
				print "<script>alert('Não cadastrou');</script>";
				print "<script>location.href='?page=listar-marca';</script>";
			}
		break;
		
		case 'editar':
			$nome = $_POST['nome_marca'];
			$email = $_POST['email_marca'];
			$telefone = $_POST['telefone_marca'];

			$sql = "UPDATE marca SET nome_marca='{$nome}', email_marca='{$email}', telefone_marca='{$telefone}' WHERE id_marca='".$_REQUEST['id_marca']."'";
			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-marca';</script>";
			}else{
				print "<script>alert('Não editou');</script>";
				print "<script>location.href='?page=listar-marca';</script>";
			}
		break;

		case 'excluir':
    		$sql = "DELETE FROM marca WHERE id_marca='".$_REQUEST['id_marca']."'";
    		$res = $conn->query($sql);

    		if($res == true){
        	print "<script>alert('Excluiu com sucesso!');</script>";
        	print "<script>location.href='?page=listar-marca';</script>";
    	}else{
        	print "<script>alert('Não excluiu');</script>";
        	print "<script>location.href='?page=listar-marca';</script>";
    	}
    	break;
	}