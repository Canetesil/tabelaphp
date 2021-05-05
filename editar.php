<?php
include('conexao.php');
$idteste = $_GET['idteste'];
//echo $idteste;

$sql="select * from tblteste where idteste='$idteste'";
$qry = mysqli_query($conn,$sql);
$linha = mysqli_fetch_array($qry);

$idteste = $linha['idteste'];
$nome    = $linha['nome'];
$idade   = $linha['idade'];
?>
<form action="updateusuario.php" method="post" >
ID   <input type="text" name="idteste" value="<?php echo $idteste ?>"readonly> <br>
NOME   <input type="text" name="nome" value="<?php echo $nome ?>"> <br>
IDADE <input type="text" name="idade" value="<?php echo $idade ?>"> 
<input type="submit" value="Atualizar"> 