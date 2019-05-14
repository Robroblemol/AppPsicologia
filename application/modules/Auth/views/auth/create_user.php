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

  <!-- Custom styles for this template-->
  <link href="<?= base_url('/template/')?>css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
<div class="container">
      <div class="card mb-3">
      	<div class="card-header">
                  <h1><?php echo lang('create_user_heading');?></h1>
                  <p><?php echo lang('create_user_subheading');?></p>
                  <div id="infoMessage"><?php echo $message;?></div>
            </div> 
            <div class="card-body">
                  <?php echo form_open("Auth/create_user");?>
                  
                        <p>
                              <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                              <?php echo form_input($first_name);?>
                        </p>
                  
                        <p>
                              <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                              <?php echo form_input($last_name);?>
                        </p>
                        
                        <?php
                        if($identity_column!=='email') {
                            echo '<p>';
                            echo lang('create_user_identity_label', 'identity');
                            echo '<br />';
                            echo form_error('identity');
                            echo form_input($identity);
                            echo '</p>';
                        }
                        ?>
                  
                        <p>
                              <?php echo lang('create_user_company_label', 'company');?> <br />
                              <?php echo form_input($company);?>
                        </p>
                  
                        <p>
                              <?php echo lang('create_user_email_label', 'email');?> <br />
                              <?php echo form_input($email);?>
                        </p>
                  
                        <p>
                              <?php echo lang('create_user_phone_label', 'phone');?> <br />
                              <?php echo form_input($phone);?>
                        </p>
                  
                        <p>
                              <?php echo lang('create_user_password_label', 'password');?> <br />
                              <?php echo form_input($password);?>
                        </p>
                  
                        <p>
                              <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                              <?php echo form_input($password_confirm);?>
                        </p>
                  
                  
                        <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>
                  
                  <?php echo form_close();?>
             </div>
      </div>
</div>
<!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('/template/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('/template/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('/template/')?>vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>

</html>