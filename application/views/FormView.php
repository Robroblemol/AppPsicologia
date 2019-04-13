<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<!-- Beginning header -->
    <div>
        <a href='<?php echo site_url('Main/')?>'>Inicio</a> 
        <a href='<?php echo site_url('Main/students')?>'>Estudiantes</a> 
        <a href='<?php echo site_url('Main/psychologicalHistories')?>'>Antecedentes psicologicos</a> 
        <a href='<?php echo site_url('Main/relatives')?>'>Acudientes</a> 
        <a href='<?php echo site_url('Main/family_histories')?>'>Antecedente Familiar</a> 
        <a href='<?php echo site_url('Main/family_relationship')?>'>Relacion Familiar</a>
        <a href='<?php echo site_url('Main/school_histories')?>'>Antecedente escuela</a>
    </div> 
<!-- End of header-->
    <div style='height:20px;'></div>  
    <div>
<?php echo $output; ?>
<?php
 
if(isset($combo_setup)) {
$this->load->view('Formulario', $combo_setup);
 
}
?> 
    </div>
<!-- Beginning footer -->
<div>Footer</div>
<!-- End of Footer -->
</body>
</html>