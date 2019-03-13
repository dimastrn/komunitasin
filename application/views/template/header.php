<!DOCTYPE html>
<html lang="en">
<head>
    <meta acharset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table Komunitas</title>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/fresh-bootstrap-table.css'); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/menu.css'); ?>">
    <style>      
    </style>
</head>
<body>

<div class="wrapper-menu">
  <br>
    <h2>Komunitas Programmer Indonesia</h2>
    <br>  
    <h6> < Always Learning, Always Envolving /> </h6>
    <nav class="tabs">
      <div class="selector"></div>
      <a href="<?php echo site_url('pengurus') ?>" class="<?php echo is_active_page_print('pengurus', 'active'); ?>"><!-- <i class="fas fa-burn"> --></i>Pengurus</a>
      <a href="<?php echo site_url('admin') ?>" class="<?php echo is_active_page_print('admin', 'active'); ?>"><!-- <i class="fas fa-bomb"> --></i>Admin</a>   
      <a href="<?php echo site_url('user/logout') ?>" class="logout" style="background: #f44336; color: #fff; border-bottom-right-radius: 50px; border-top-right-radius: 50px;"><i class="fas fa-lock"></i>Logout</a>  
    </nav>
    <br>
    <br>
  </div>
