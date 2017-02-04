<?php include('public_header.php');?>

<div class="container">

<?php  echo form_open('login/admin_login','calss=form-horizontal')?>
  <fieldset>
    <legend>Admin Login</legend>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
      <?php
            $data = array(
                       array(
                             'name'  => 'username',
                             'placeholder'    => 'username',
                             'class' => 'form-control',
                           //'value' => set_value('name', 'your name'),
                             ),
            
                          );


            echo form_input($data[0]);

      ?>

      <?php
      //echo form_error('username',"<p class='text-danger'>","</p>"); // red color karne ke liye
      echo form_error('username');
      ?>
      </div>

    </div>
    
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
      <?php


$data = array(
           
            array(
                'name'  => 'password',
                'placeholder'    => 'Password',
                'class' => 'form-control',
                //'value' => set_value('name', 'your name'),
            ),
           
        );


echo form_input($data[0]);


      ?>
      <?php
      //echo form_error('password',"<p class='text-danger'>","</p>"); // red color karne ke liye
      echo form_error('password');
      ?>
      </div>
    </div>
    

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">

      <?php

      $data = array(
                    array(
                          'name'  => 'submit',
                          'id'    => 'submit',
                          'class' => 'btn btn-default',
                          'value' => set_value('name', 'reset'),
                          ),
                    array(
                          'name'  => 'reset',
                          'id'    => 'reset',
                          'class' => 'btn btn-primary',
                          'value' => set_value('name', 'Submit'),
                          ),            
                    );
      echo form_reset($data[0]);
      echo form_submit($data[1]);

      ?>
      </div>      
    </div>
    </div>

  </fieldset>
</form>

<?php include('public_footer.php');?>



 