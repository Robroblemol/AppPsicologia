<div class="container">
     
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <p>Por favor inicie seccion
            con nombre de usuario o email</p>
            
            <form action="<?=base_url(
                    "index.php/Auth/login"
                )
                ?>" method="post">
            <label for="identity">Email/Username:</label>
            <input type="text" class="form-control"
                name="identity" 
                value="" id="identity"/>
            <label for="password">Password:</label>    
            <input type="password"class="form-control"
                name="password" 
                value="" id="password"/>
            
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input"
                    id="remember"
                    name="remember">
                <label class="custom-control-label" for="remember">
                    Recuerdame</label>
            </div>
            
        
            <div>
            <input type="submit" name="submit" 
                class="btn btn-primary"
                value="Login"/>
                
            </div>   
  
            </form>
            <div>
            <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
            
            </div>
        </div>
    </div>
</div>
