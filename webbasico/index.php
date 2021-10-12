<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Gerenciamento de Contatos</title>
  </head>
  <body>

<center><h1>Gerenciamento de Contatos</h1>

<form method="post" action="salvarContato.php" enctype="multipart/form-data">
  <table border = '0'>
  	 <tr>
  	 	<td>Nome:</td>
  	 	<td><input type="text" name="nome"></td>
  	 </tr>
  	 <tr>
  	 	<td>Telefone:</td>
  	 	<td><input type="text" name="telefone"></td>
  	 </tr>
  	 <tr>
  	 	<td>Foto:</td>
  	 	<td><input type="file" name="foto"></td>
  	 </tr>
  	 <tr>
  	 	<td colspan="2"><input type="submit" value="Cadastrar" class="btn btn-primary"></td>
  	 	
  	 </tr>
  </table>
	
</form>

</center>

<?php
  include("conexao.php");
	//post get
  //	$_POST[]  $_GET[]
	
	//Listagem dos contatos Cadastrados
	$lista = mysqli_query($conexao,"select * from tb_contatos");
	
	echo '<table class="table">
	      <tr><td>Código</td><td>Nome</td><td>Telefone</td><td>Foto</td><td>#</td></tr>';
	while ($linha = mysqli_fetch_assoc($lista)){
		echo '<tr>';
		echo '<td>'.$linha["codigo"].'</td>';
		echo '<td>'.$linha["nome"].'</td>';
		echo '<td>'.$linha["telefone"].'</td>';
		echo '<td><a href="'.$linha["foto"].'" target="_blank"><img src="'.$linha["foto"].'" width="50" height="50"></a></td>';
		echo '<td><a class="btn btn-danger" href="excluirContato.php?codigo='.$linha["codigo"].'">Remover</a></td>';
		echo '</tr>';
	}
	echo '</table>';
	
/* https://youtu.be/W_CnAGhAx8w
https://youtu.be/R_CNHoPB1KQ
https://youtu.be/RamuiSd6j1Y
*/
	?>

<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>