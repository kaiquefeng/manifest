<?php 

$servername = "localhost";
$database = "manifest";
$username = "root";
$password = "root";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully"; 
 

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
                  window.location = "/";
              </script>
      <?php
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>