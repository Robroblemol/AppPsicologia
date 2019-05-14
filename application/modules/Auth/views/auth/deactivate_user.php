
  
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('/template/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?= base_url('/template/')?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('/template/')?>css/sb-admin.css" rel="stylesheet">

</head>  
  
<body class="bg-dark">
  
<div class="container">

<div class="card mb-3">
	<div class="card-header">

    <h1><?php echo lang('deactivate_heading');?></h1>

  </div>

<div class="card-body">
    <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
 <?php echo form_open("Auth/deactivate/".$user->id);?>
     <p>
      	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
        <input type="radio" name="confirm" value="yes" checked="checked" />
        <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
        <input type="radio" name="confirm" value="no" />
      </p>
    
      <?php echo form_hidden($csrf); ?>
      <?php echo form_hidden(['id' => $user->id]); ?>
    
      <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

  
  


      
  <?php echo form_close();?>

</body>


