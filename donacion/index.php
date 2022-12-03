<?php 
include('header.php');
include('config.php');
$productName = "Producto Demostración";
$currency = "USD";
$productPrice = 100;
$productId = 123456;
$orderNumber = 546;
?>
<title>Donaciones con PayPal</title>
<?php include('contenedor.php');?>
<div class="container">
	<h2>Dona Aquí</h2>	
	<br>
	<table class="table">
	    <tr>
          <td style="width:150px"><img src="producto_demo.jpg" style="width:50px" /></td>
          <td style="width:150px">$<?php echo $productPrice; ?></td>
          <td style="width:150px">
          <?php include 'paypalCheckout.php'; ?>
          </td>
        </tr>
    </table>	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="../index.php">Regresar a Inicio</a>		
	</div>
</div>
<?php include('footer.php');?>
