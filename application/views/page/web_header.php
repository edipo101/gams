<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GAMS | Sucre</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>dist/css/AdminLTE.min.css">
  <!-- My stylesheet -->
  <link rel="stylesheet" href="<?= base_url() ?>libraries/css/styles.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url() ?>dist/css/skins/_all-skins.min.css">

  <link rel="icon" href="images/favicon.ico" type="image/ico">

  <link href='<?= base_url() ?>resources/dropzone.css' type='text/css' rel='stylesheet'>
  <script src='<?= base_url() ?>resources/dropzone.js' type='text/javascript'></script>

  <style>
  .content2{
    width: 50%;
    padding: 5px;
    margin: 0 auto;
  }
  .content2 span{
    width: 250px;
  }
  .dz-message{
    text-align: center;
    font-size: 28px;
  }
  </style>

  <script type="text/javascript">
    // Add restrictions
    Dropzone.options.fileupload = {
        acceptedFiles: 'image/*',
        maxFilesize: 1 // MB
    };

    var base_url = '<?php echo base_url() ?>';
  </script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-red layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="https://sucre.bo" class="navbar-brand"><b>GAMS</b>Sucre</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <!-- <ul class="nav navbar-nav">
            <li><a href="">Gobierno Autónomo Municipal de Sucre</a></li>
          </ul> -->

        </div>
        <!-- /.navbar-collapse -->
        
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>