<?php
$user_id=$this->session->userdata('idUser');

print_r($user_id);

if(!$user_id){
 
  redirect('index.php/user/login');
}
 
 ?>
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>" />
  </head>
  <body>
 
<div class="container">
  <div class="row">
    <div class="col-md-4">
 
      <table class="table table-bordered table-striped">
 
 
        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>
 
        </tr>
            <td>User Email</td>
            <td><?php echo $this->session->userdata('user_email');  ?></td>
          </tr>
      </table>
 
 
    </div>
  </div>
<a href="<?php echo base_url('index.php/user/logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
  </body>
</html>