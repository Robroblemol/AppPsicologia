<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('/template/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?= base_url('/template/')?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('/template/')?>css/sb-admin.css" rel="stylesheet">

</head>
<?php 

    echo modules::run("Home/getNav/$app");
    echo modules::run("Home/getHeader");
    echo modules::run("Student/getForm");
    echo modules::run("Home/getFooter");
?>