<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.dataTables.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
   <?php 
        $set_mode = $this->session->userdata('mode'); 
        if($set_mode == 1){
            $mode = "theme-dark";
        }
        if($set_mode == 0 || $set_mode == null){
            $mode = "theme";
        }
    ?>
    <link id="theme" rel="stylesheet" href="<?php echo base_url() . 'assets/css/' . $mode .'.css'?>" nm="<?php echo $set_mode?>">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/favicon.png" type="image/x-icon">
    <title>UnionGalvasteel</title>
</head>
<body>
