<?php 

$servername = "localhost";
$database = "manifest";
$username = "root";
$password = "root";

$conn = mysqli_connect($servername, $username, $password, $database);
// checando conexão
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

 // Inserindo dados
 $nome = $_POST ["nome"];
 $email = $_POST ["email"]; 
 $tel = $_POST ["telefone"]; 
 $cidade = $_POST ["cidade"];
 $estado = $_POST ["estado"];


 $sql = "INSERT INTO `users` (`nome`, `email`, `telefone`, `cidade`, `estado`, `horario`) VALUES ('$nome', '$email', '$tel', '$cidade', '$estado', 'manha');";
if (mysqli_query($conn, $sql)) {
      ?>
              <script>
                  alert("Dados enviados com sucesso");
              </script>
      <?php
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>