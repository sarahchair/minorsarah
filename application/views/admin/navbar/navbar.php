<?php
$assets_location = base_url()."assets/bootstrap/admin/";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel Admin Minor Project</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $assets_location;?>css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $assets_location;?>css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $assets_location;?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Admin Minor Project</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Minor Project <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/admin/dashboard/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/admin/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                 	<li class="active">
                        <a href="<?php echo base_url();?>index.php/admin/about"><i class="fa fa-fw fa-file"></i> About</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-file"></i> Katalog <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>index.php/admin/katalog">Tambah Katalog</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/admin/katalog/listKatalog">List Katalog</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-file"></i> Gallery <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>index.php/admin/gallery">Tambah Gallery</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/admin/gallery/listGallery">List Gallery</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/admin/pesan"><i class="fa fa-fw fa-envelope"></i> Pesan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/admin/SMTPMail/view"><i class="fa fa-fw fa-envelope"></i> Subscriber</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-envelope"></i> Broadcast <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>index.php/admin/SMTPMail/formBroadcast">Broadcast</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/admin/SMTPMail/listBroadcast">List Broadcast</a>
                            </li>
                        </ul>
                    </li>


            </div>
            <!-- /.navbar-collapse -->
        </nav>
