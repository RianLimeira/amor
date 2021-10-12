<?php
   include("conexao.php");
	//post get
  //	$_POST[]  $_GET[]
  if (isset($_POST["nome"])){
	 if (trim($_POST["nome"]) != ''){
		 $nome     = $_POST["nome"];  
		 $telefone = $_POST["telefone"]; 
		 $foto     = $_FILES["foto"];
		 $nomeFoto = 'fotos/'.$foto["name"];

		 if (move_uploaded_file($foto["tmp_name"],$nomeFoto)){
			 $inserir = mysqli_query($conexao,"insert into tb_contatos VALUES (0,'$nome','$telefone','$nomeFoto') ");
			 if ($inserir){
				echo "<script>alert('Contato Gravado com sucesso');</script>"; 
				 echo '<meta http-equiv="refresh" content="0; url=index">';
			 }else{
				echo "<font color='red'><b>Não foi possivel gravar o contato</b></font>"; 
			 }

		 } else {
			 echo "Erro ao tentar Enviar Foto";
		 }
	 }
  }	//Fim da Inserção de novos registros
?>