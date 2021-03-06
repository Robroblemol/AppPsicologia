<div class="container">
     
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <?php
            if($message!=null){?>
		        <div class="alert alert-info" 
			        id="infoMessage"><?php echo $message;?>
		        </div>
		    <?php }?>
            <p>Por favor inicie seccion
            con nombre de usuario o email</p>
            
        <?php echo form_open("Auth/login");?>
              <p>
                <?php echo lang('login_identity_label', 'identity');?>
                <?php echo form_input($identity);?>
              </p>
            
              <p>
                <?php echo lang('login_password_label', 'password');?>
                <?php echo form_input($password);?>
              </p>
            
              <div class="custom-control custom-checkbox">
                <?php echo form_checkbox('remember',
                    '1', FALSE, 'id="remember" class="custom-control-input"');?>
                <label class="custom-control-label" for="remember">
                <?php echo lang('login_remember_label', 'remember');?>
                </label>
              </div>
            
            
              <p><?php echo form_submit('submit', lang('login_submit_btn'),'class ="btn btn-primary"');?></p>

        <?php echo form_close();?>
            <div>
            <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
            
            </div>
        </div>
    </div>
</div>
