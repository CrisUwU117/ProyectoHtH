<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos del formulario
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validar los datos del formulario
  if (empty($username) || empty($password)) {
    $error = "Por favor, ingrese su nombre de usuario y contraseña.";
  } else {
    // Conectarse a la base de datos
    $conn = mysqli_connect("hthbase.cqk4mgjj5s4t.us-east-1.rds.amazonaws.com", "hthadmin", "EconomiaDigi21", "HtHbase");

    // Buscar al usuario en la base de datos
    $sql = "SELECT * FROM Clientes WHERE customer_username='$username' AND customer_password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
      // Iniciar sesión y redirigir al usuario
      $_SESSION["username"] = $username;
      header("Location: Menu.html");
      exit();
    } else {
       
    }
  }
}
?>
<script type="text/javascript">
	alert("Usuario o contraseña incorrectos");
	window.location.href='index.html';
</script>