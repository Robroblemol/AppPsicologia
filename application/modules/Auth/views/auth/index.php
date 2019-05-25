
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
<?php
echo modules::run("Home/get_nav");
?>

<div class="container">

<div class="card mb-3">
	<div class="card-header">
		<h1><?php echo lang('index_heading');?></h1>
		<p><?php echo lang('index_subheading');?></p>
		
	
	</div>
	<div class="card-body">
		<?php
            if($message!=null){?>
		<div class="alert alert-success" 
			id="infoMessage"><?php echo $message;?>
		</div>
		<?php }?>
    	<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
				<tr>
					<th><?php echo lang('index_fname_th');?></th>
					<th><?php echo lang('index_lname_th');?></th>
					<th><?php echo lang('index_email_th');?></th>
					<th><?php echo lang('index_groups_th');?></th>
					<th><?php echo lang('index_status_th');?></th>
					<th><?php echo lang('index_action_th');?></th>
				</tr>
				</thead>
				<tfoot>
					<tr>
						<th><?php echo lang('index_fname_th');?></th>
						<th><?php echo lang('index_lname_th');?></th>
						<th><?php echo lang('index_email_th');?></th>
						<th><?php echo lang('index_groups_th');?></th>
						<th><?php echo lang('index_status_th');?></th>
						<th><?php echo lang('index_action_th');?></th>
					</tr>

				</tfoot>
				<?php foreach ($users as $user):?>
					<tr>
			            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
			            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
			            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
						<td>
							<?php foreach ($user->groups as $group):?>
								<?php echo anchor("Auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
			                <?php endforeach?>
						</td>
						<td><?php echo ($user->active) ? anchor("Auth/deactivate/".$user->id, lang('index_active_link')) : anchor("Auth/activate/". $user->id, lang('index_inactive_link'));?></td>
						<td>
							<i class="fa fa-edit"></i>
							<?php echo anchor("Auth/edit_user/".$user->id, 'Edit') ;?>
						</td>
					</tr>
				<?php endforeach;?>
			</table>
			<p><?php echo anchor('Auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('Auth/create_group', lang('index_create_group_link'))?></p>
    		
    	</div>
    </div>
</div>
</div>

 <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Listo para salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Logout" para salir.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url("index.php/Auth/logout")?>">Logout</a>
        </div>
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