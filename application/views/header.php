<!DOCTYPE html>
<html lang="en">
<head>
    <meta acharset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table Komunitas</title>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/fresh-bootstrap-table.css'); ?>" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/menu.css'); ?>">
</head>
<body>

<div class="wrapper-menu">
  <br>
    <h2>Komunitas MEME Indonesia</h2>
    <h6>Me Create Me Laugh</h6>
    <nav class="tabs">
      <div class="selector"></div>
      <a href="<?php echo site_url('pengurus') ?>" class="<?php echo is_active_page_print('pengurus', 'active'); ?>"><!-- <i class="fas fa-burn"> --></i>Pengurus</a>
      <a href="<?php echo site_url('admin') ?>" class="<?php echo is_active_page_print('admin', 'active'); ?>"><!-- <i class="fas fa-bomb"> --></i>Admin</a>   
    </nav>
    <br>
    <br>
  </div>
