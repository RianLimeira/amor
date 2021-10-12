<?php
  include("conexao.php");
  $codigo = $_GET["codigo"];
  $foto   = mysqli_query($conexao,"select * from tb_contatos where codigo = '$codigo'");
  $fotoSelecionada = mysqli_fetch_assoc($foto);

  $excluir = mysqli_query($conexao, "delete from tb_contatos where codigo = '$codigo' ");
  
  if ($excluir){
	  unlink($fotoSelecionada["foto"]); //Apago a foto vinculada ao registro
	  echo "<script>alert('Contato Removido com sucesso');</script>"; 
	  echo '<meta http-equiv="refresh" content="0; url=index">';
  }else{
	  echo "Ocorreu algum erro";
  }
  
?>