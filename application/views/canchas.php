<?php 
	if(!$this->session->userdata('logueado')){
		redirect('');

	};
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>assets/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>
<body>
 <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Arriendos Recoleta</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#canchas">Canchas</a>
                    </li>

<!-- poner la condicion de session para modificar el menu --> 

                    <?php if($this->session->userdata('logueado')){?>

                    <li> 
                        <a href="#"><?php echo $this->session->userdata('nombre');?></a>
                    </li>

                    <li>
                        
                    <a href="<?php echo base_url();?>index.php/logout">Cerrar Sesion</a>

                    </li>

                        <?php }
                          else {
                         ?>
                    <li>
                        <a href="<?php echo base_url();?>index.php/login">Login</a>
                    </li>
                        <?php } ?>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="calendario">
        <table class="calendario">
                <tr class="back">
                    <td class="cabecera">
                        Nombre
                    </td>
                    <td class="cabecera">
                        Precio
                    </td>
                </tr>
                <?php
                if($query!=false){ 
                    foreach ($query->result() as $row)
                    {
                        if($row->id_gym == $num){
                                echo '<tr>';
                                    echo '<td class="horario">';
                                        echo '<a href=base_url();?>index.php/viewHorarios' . $row->id_cancha . '>' . $row->Nombre . '</a>';
                                    echo '</td>'; 
                                    echo '<td class="horario">';
                                        echo $row->Precio;
                                    echo '</td>';  
                                echo '</tr>';
                        }
                    }
                }
                else{
                    echo "No se han ingresado datos a la base de datos.";
                }
                ?>
        </table>

    </div>
    
    
  <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>