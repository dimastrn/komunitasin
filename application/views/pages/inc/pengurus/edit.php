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
</head>
<body>

<div class="container">
    
    <?php echo form_open('pengurus/update'); ?>
        <?php foreach($edit as $data): ?>
        <h2 style="text-transform: uppercase;">Update Data</h2> 
        <div class="form-group" style="display: none;">            
            <?php echo form_input('id_komunitas', $data->id_komunitas, 'class="form-control"'); ?>
        </div>

        <div class="form-group">
            <label>Nama</label>
            <?php echo form_input('nama', $data->nama, 'class="form-control" placeholder="Masukan Nama"'); ?>
        </div>
                
        <div class="form-group">
            <label>Alamat</label>
            <?php echo form_input('alamat', $data->alamat, 'class="form-control" placeholder="Masukan Alamat"'); ?>
        </div>

        <div class="form-group">
            <label>Gaji</label>
            <?php echo form_input('gaji', $data->gaji, 'class="form-control" placeholder="Masukan Gaji"'); ?>
        </div>

        <div class="form-group">
            <label>Gender</label>                    
            <?php 
                $data_select = array(  
                    '' => 'Pilih',
                    'pria' => 'Pria',
                    'wanita' => 'Wanita'
                );
                echo form_dropdown('gender', $data_select, $data->gender,'class="form-control"'); 
            ?>                    
        </div>
        
        <div class="form-group">
            <a href="<?php echo site_url('pengurus'); ?>" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </div>

        <?php endforeach; ?>
    <?php echo form_close();?>

</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-table.js') ?>"></script>

</body>
</html>