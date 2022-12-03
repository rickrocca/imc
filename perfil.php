<?php
session_start();



$usuario = mysqli_real_escape_string($conexao, $_SESSION['nome']);
$query = "SELECT imc FROM `usuario` WHERE usuario = '$usuario';";
$result = mysqli_query($conexao, $query);
//print_r($result);
$imc = mysqli_fetch_assoc($result);

//echo $imc['imc'];
/*$row = mysqli_num_rows($result);

$imc = mysqli_fetch_object($result);
echo $imc;
if ($row == 1) {
    print "<script>alert('Dados encontrados');</script>";
}else {
    print "<script>alert('Houve um erro ao procurar os dados');</script>";
}
*/
if ($imc['imc']<= 18.5) {
  print "<script>alert('Você está abaixo do peso');</script>";
}
if($imc['imc']>= 25){
  print "<script>alert('Você está acima do peso');</script>";
}
?>

<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
<h2>O seu imc é <?php echo $imc['imc']?></h2>
<h2><a href="logout.php">Sair</a></h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">IMC</th>
      <th scope="col">CLASSIFICAÇÃO</th>
      <th scope="col">OBESIDADE (GRAU)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">MENOR QUE 18,5</th>
      <td>MAGREZA</td>
      <td>0</td>
    </tr>
    <tr>
      <th scope="row">ENTRE 18,5 E 24,9</th>
      <td>NORMAL</td>
      <td>0</td>
    </tr>
    <tr>
      <th scope="row">ENTRE 25,0 E 29,9</th>
      <td>SOBREPESO</td>
      <td>I</td>
    </tr>
    <tr>
      <th scope="row">ENTRE 30,0 E 39,9</th>
      <td>OBESIDADE</td>
      <td>II</td>
    </tr>
    <tr>
      <th scope="row">MAIOR QUE 40,0</th>
      <td>OBESIDADE GRAVE</td>
      <td>III</td>
    </tr>
  </tbody>
</table>