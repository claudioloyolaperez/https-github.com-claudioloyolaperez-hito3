<!DOCTYPE html>
<html>
<head>
	<title>Recintos Deportivo</title>
	<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>assets/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="" rel="stylesheet">
</head>
<body class="homepage">
<div id="page-wrapper">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
                <a class="navbar-brand" href="<?= base_url() ?>">Recinto Deportivo</a>
                <div class="login">
                    <?php
                        if($this->session->userdata('logueado')){?>
                            <li> 
                                <a href=""><?php echo $this->session->userdata('nombre');?></a>
                            </li>
        
                            <li>
                                
                            <a href="<?php echo base_url();?>index.php/logout">Cerrar Sesion</a>
        
                            </li>
                </div>
                            
                    <?php }
                        else{?>
                        
                            <li>
                                <a href="<?php echo base_url();?>index.php/login">Login</a>
                            </li>
                </div>
                    <?php    }
                    ?>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
            <?php
                if($this->session->userdata('logueado')){?>
                    <div class="wrapper">
                        <div class="container">
                            <?php
                                $bool = true;
                                if($datos != false){
                                    foreach ($datos->result() as $row) {
                                        if($bool == true){
                                            $bool = false;
                                            ?>
                                                <div class="row">
                                                    <section class="6u 12u(narrower) feature">
                                                    <header>
                                                    <h2><a href="<?php echo base_url();?>index.php/viewCanchas<?php echo $row->id_gym; ?>"><?php echo $row->Nombre; ?></a></h2>
                                                    </header>
                                                    <div class="image-wrapper first">
                                                    <a href="<?php echo base_url();?>index.php/viewCanchas<?php echo $row->id_gym; ?>" class="image featured first"><img src="<?php echo "/fis/" . $row->Imagen; ?>" alt="" /></a>
                                                    </div>
                                                     <p><?php echo $row->Descripcion; ?></p>
                                                    </section>
                                            <?php
                                        }
                                        else{
                                            $bool = true;
                                            ?>

                                                    <section class="6u 12u(narrower) feature">
                                                    <header>
                                                    <h2><a href="<?php echo base_url();?>index.php/viewCanchas<?php echo $row->id_gym; ?>"><?php echo $row->Nombre; ?></a></h2>
                                                    </header>
                                                    <div class="image-wrapper">
                                                    <a href="<?php echo base_url();?>index.php/viewCanchas<?php echo $row->id_gym; ?>"class="image featured first"><img src="<?php echo "/fis/" . $row->Imagen; ?>" alt="" /></a>
                                                    </div>
                                                    <p><?php echo $row->Descripcion; ?></p>
                            </section>
                        </div>
                                        <?php }
                                    }
                                }
                            ?>
                        </div>
                    </div>
                <?php }
                else{?>
                    <div class="wrapper">
                        <div class="container">
                     </div>
                    </div>
            <?php } ?>
</div>
</div>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>