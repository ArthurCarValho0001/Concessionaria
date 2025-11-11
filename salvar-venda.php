<?php 
	
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome	= $_POST['nome_venda'];
			$email	= $_POST['email_venda'];
			$telefone = $_POST['telefone_venda'];

			$sql = "INSERT INTO venda (nome_venda, email_venda, telefone_venda)
					VALUES ('{$nome}', '{$email}', '{$telefone}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-venda';</script>";
			}else{
				print "<script>alert('Não cadastrou');</script>";
				print "<script>location.href='?page=listar-venda';</script>";
			}
		break;
		
		case 'editar':
			$nome = $_POST['nome_venda'];
			$email = $_POST['email_venda'];
			$telefone = $_POST['telefone_venda'];

			$sql = "UPDATE venda SET nome_venda='{$nome}', email_venda='{$email}', telefone_venda='{$telefone}' WHERE id_venda='".$_REQUEST['id_venda']."'";
			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-venda';</script>";
			}else{
				print "<script>alert('Não editou');</script>";
				print "<script>location.href='?page=listar-venda';</script>";
			}
		break;

		case 'excluir':
    		$sql = "DELETE FROM venda WHERE id_venda='".$_REQUEST['id_venda']."'";
    		$res = $conn->query($sql);

    		if($res == true){
        	print "<script>alert('Excluiu com sucesso!');</script>";
        	print "<script>location.href='?page=listar-venda';</script>";
    	}else{
        	print "<script>alert('Não excluiu');</script>";
        	print "<script>location.href='?page=listar-venda';</script>";
    	}
    	break;
	}