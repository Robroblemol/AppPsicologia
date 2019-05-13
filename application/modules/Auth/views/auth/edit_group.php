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

  <!-- Custom styles for this template-->
  <link href="<?= base_url('/template/')?>css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
<div class="container">
            
      <div class="card mb-3">
      	<div class="card-header">
      		<h1><?php echo lang('index_heading');?></h1>
      		<p><?php echo lang('index_subheading');?></p>
      
      
      <div id="infoMessage"><?php echo $message;?></div>
      </div>
      
      <div class="card-body">
            <?php echo form_open(current_url());?>
            
                  <p>
                        <?php echo lang('edit_group_name_label', 'group_name');?> <br />
                        <?php echo form_input($group_name);?>
                  </p>
            
                  <p>
                        <?php echo lang('edit_group_desc_label', 'description');?> <br />
                        <?php echo form_input($group_description);?>
                  </p>
            
                  <p><?php echo form_submit('submit', lang('edit_group_submit_btn'));?></p>
            
            <?php echo form_close();?>
      </div>
      </div>
</div>
<!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('/template/')?>vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('/template/')?>vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>

</html>