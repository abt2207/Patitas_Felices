<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.22/dist/sweetalert2.all.min.js" ></script>

<?php if ($entrar=="admin") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '¡B I E N V E N I D O!',
                    text:'al sistema ... <?php echo $_SESSION['user'] ?>',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='api_restful/consumer/clienteProductos.php?id_cliente=<?php echo $fila['id_cliente']?>';
                    });
    }
    mensaje();
</script>

<?php } elseif ($entrar=="estandar") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'B I E N V E N I D O !!',
                    text:'al sistema ... <?php echo $_SESSION['user'] ?>',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='adopta.php?id_cliente=<?php echo $fila['id_cliente']?>';
                    });
    }
    mensaje();
</script>

<?php } elseif ($entrar=="error1") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Usuario y contraseña incorrectas ',
                    text:'por favor verifique ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='login.php?id_cliente=<?php echo $fila['id_cliente']?>';
                    });
    }
    mensaje();
</script>
<?php } ?>


<?php if ($entrar=="registrado") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'R E G I S T R O - E X I T O S O',
                    text:'en el sistema',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='proceso.php?id_mascota=<?php echo $fila['id_mascota']?>';
                    });
    }
    mensaje();
</script>



<?php } elseif ($entrar=="noreg") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'R E G I S T R O  N O  I N S E R T A D O',
                    text:'intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='insertar.php';
                    });
    }
    mensaje();
</script>
<?php } ?>

<?php if ($entrar=="registradi") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'R E G I S T R O - E X I T O S O',
                    text:'en el sistema',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='proceso.php';
                    });
    }
    mensaje();
</script>
<?php } elseif ($entrar=="noregi") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'R E G I S T R O  N O  I N S E R T A D O',
                    text:'intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='cuestionario.php';
                    });
    }
    mensaje();
</script>
<?php } ?>

<?php if ($entrar=="ado") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'TRAMITE--EN--PROCESO',
                    text:'Espere su Respuesta',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='proceso.php';
                    });
    }
    mensaje();
</script>
<?php } elseif ($entrar=="noado") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'ERROR--AL--TRAMITAR',
                    text:'intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='proceso.php';
                    });
    }
    mensaje();
</script>
<?php } ?>



<?php if ($entrar=="reg") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'R E G I S T R O - E X I T O S O',
                    text:'en el sistema',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='administrar.php';
                    });
    }
    mensaje();
</script>
<?php } elseif ($entrar=="noregi") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'R E G I S T R O  N O  I N S E R T A D O',
                    text:'intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='agregar.php';
                    });
    }
    mensaje();
</script>
<?php } ?>



<?php if ($entrar=="act") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'S-E -  A-C-T-U-A-L-I-Z-O',
                    text:'el registro correctamente en el sistema... <?php echo $_SESSION['user'] ?>',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='administrar.php';
                    });
    }
    mensaje();
</script>
<?php } elseif ($entrar=="noact") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'N O  S E  A C T U A L I Z O',
                    text:'el registro, intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='administrar.php';
                    });
    }
    mensaje();
</script>
<?php } ?>






<?php if ($entrar=="eli") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'S E - E L I M I N O',
                    text:'el registro correctamente del sistema... <?php echo $_SESSION['user'] ?>',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='administrar.php';
                    });
    }
    mensaje();
</script>
<?php } elseif ($entrar=="noeli") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'N O  S E  E L I M I N O',
                    text:'el registro, intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='administrar.php';
                    });
    }
    mensaje();
</script>

<?php } ?>

<?php if ($entrar=="eliminar") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'S E - E L I M I N O',
                    text:'el registro correctamente del sistema... <?php echo $_SESSION['user'] ?>',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='adminus.php';
                    });
    }
    mensaje();
</script>
<?php } elseif ($entrar=="noeliminado") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'N O  S E  E L I M I N O',
                    text:'el registro, intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='adminus.php';
                    });
    }
    mensaje();
</script>

<?php } ?>


<?php if ($entrar=="eliminarr") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'S E - E L I M I N O',
                    text:'el registro correctamente del sistema... <?php echo $_SESSION['user'] ?>',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='adopciones.php';
                    });
    }
    mensaje();
</script>
<?php } elseif ($entrar=="noeliminadoo") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'N O  S E  E L I M I N O',
                    text:'el registro, intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='adopciones.php';
                    });
    }
    mensaje();
</script>

<?php } ?>



<?php if ($entrar=="registro") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'S-E -  A-G-R-E-G-O',
                    text:'el registro correctamente en el sistema...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='registro.php';
                    });
    }
    mensaje();
</script>

<?php } elseif ($entrar=="noregistro") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'N O  S E  A G R E G O',
                    text:'el registro, intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='agregar.php';
                    });
    }
    mensaje();
</script>
<?php } ?>
<?php if ($entrar=="registro") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'R E G I S T R O - E X I T O S O',
                    text:'en el sistema...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='registro.php';
                    });
    }
    mensaje();
</script>
<?php } elseif ($entrar=="noregistro") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'R E G I S T R O  N O  I N S E R T A D O',
                    text:'intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='registro.php';
                    });
    }
    mensaje();
</script>
<?php } ?>

<?php if ($entrar=="se_registro") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'M E N S A J E - E N V I A D O',
                    text:'en el sistema...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='index.php.';
                    });
    }
    mensaje();
</script>
<?php } elseif ($entrar=="no_se_registro") { ?>
    <script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'M E N S A J E N O E N V I A D O',
                    text:'intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='index.php.';
                    });
    }
    mensaje();
</script>
<?php } ?>





<?php if ($entrar=="img1") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'El archivo y el registro ',
                    text:'se subieron correctamente al servidor',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='agregar.php.';
                    });
    }
    mensaje();
</script>
<?php } elseif ($entrar=="img2") { ?>
    <script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'El archivo subido *NO*',
                    text:'es una imagen',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='agregar.php.';
                    });
    }
    mensaje();
</script>
<?php } ?>






