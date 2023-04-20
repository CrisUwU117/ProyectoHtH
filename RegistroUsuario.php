<?php
	$conn = mysqli_connect("hthbase.cqk4mgjj5s4t.us-east-1.rds.amazonaws.com", "hthadmin", "EconomiaDigi21", "HtHbase");
  
    $customer_name=$_POST["customer_name"];
    $username=$_POST["username"];
    $Password=$_POST["Password"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];


 $sentencia="INSERT INTO Clientes (customer_name, customer_username, customer_password,customer_email,customer_phone) 
    VALUES ('$customer_name', '$username', '$Password', '$email', '$phone')";
		
        
        if (mysqli_query($conn, $sentencia)) {
            
        } else {
            echo "Error al insertar registro: " . mysqli_error($conn);
        }
	
?>
<script type="text/javascript">
	alert("Usuario Registrado exitosamente");
	window.location.href='Index.html';
</script>