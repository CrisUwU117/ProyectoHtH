<?php
	$conn = mysqli_connect("hthbase.cqk4mgjj5s4t.us-east-1.rds.amazonaws.com", "hthadmin", "EconomiaDigi21", "HtHbase");

    $Ntarje=$_POST["Ntarje"];
    $Vigencia=$_POST["Vigencia"];
    $cvv=$_POST["cvv"];
   


 $sentencia="INSERT INTO tarjeta (numTarjeta, vigencia, cvv,saldo) 
    VALUES ('$Ntarje', '$Vigencia', '$cvv',5000 )";
		
        
        if (mysqli_query($conn, $sentencia)) {
            
        } else {
            echo "Error al insertar registro: " . mysqli_error($conn);
        }
       
?>
<script type="text/javascript">
	alert("Tarjeta Ingresada  exitosamente");
	window.location.href='index.html';
</script>