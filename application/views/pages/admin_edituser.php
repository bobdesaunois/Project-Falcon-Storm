    <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-warning-sign"></span> 
        <strong>WARNING!</strong><br/>
        The password is displayed encrypted, <br/>
        leave it for what it is if you do not wish to change it,<br/>
        if you do want to change it just replace it with a new password like "foobar".
    </div>
     <!--<br/><br/><br/><br/><br/><br/>-->
<form method="POST">
    
    <?php
    $user = $this->User_model->getUserById($param_id);
    ?>
    
    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Edit user: <?php echo $user["email"]; ?></h3>
  </div>
  <div class="panel-body">
    
      <a class="btn btn-primary" href="<?php echo base_url() ?>index.php/admin">
        Back
        </a>
     <br/><br/> 
    <strong>
        ID:
    </strong>
    
    <div class="input-group col-lg-6">
        <span class="input-group-addon">#</span>
        <input name="param_id" type="number" class="form-control" placeholder="ID" value="<?php echo $user["id"]; ?>" readonly>
      </div>
    <br/>
    <strong>
        Email address:
    </strong>
    <div class="input-group col-lg-6">
  <span class="input-group-addon">@</span>
  <input name="param_email" type="email" class="form-control" placeholder="Email" value="<?php echo $user["email"]; ?>" required>
</div>
    <br/>
    <strong>
        Password:
    </strong><!--
--><div class="input-group col-lg-6">
  <span class="input-group-addon">*</span>
  <input name="param_password" type="text" class="form-control" placeholder="Password" value="<?php echo $user["password"]; ?>">
</div>
    <br/>
    <strong>
        Firstname:
    </strong><!--
--><div class="input-group col-lg-6">
  <span class="input-group-addon">Abc</span>
  <input name="param_firstname" type="text" class="form-control" placeholder="firstname" value="<?php echo $user["firstname"]; ?>">
</div>
<br/>
<strong>
        Lastname:
    </strong><!--
--><div class="input-group col-lg-6">
  <span class="input-group-addon">Abc</span>
  <input name="param_lastname" type="text" class="form-control" placeholder="lastname" value="<?php echo $user["lastname"]; ?>">
</div>
<br/>
<div class="input-group col-lg-6">
<strong>Grade: </strong>
<input name="param_grade" type="number" class="form-control" placeholder="Grade" value="<?=$user["grade"];?>">
</div>
<br/>
    
        <strong>
        User group:
    </strong>
<div class="input-group col-lg-6">
<!--  <span class="input-group-addon">#</span>
  <input name="param_group_id" type="number" class="form-control" 
         placeholder="Gebruikers groep" 
         value="<?php echo $user["group_id"]; ?>" required>-->
    
    <select name="param_group_id" class="form-control">
        <option value="0" <?php if($user["group_id"] == 0) echo "selected='selected'"; ?>>Student</option>
        <option value="1" <?php if($user["group_id"] == 1) echo "selected='selected'"; ?>>Teacher</option>
    </select>
    
</div>
    <br/>
    <input name="submit_edit" type="submit" class="btn btn-primary" 
           value="Edit" />
    

  </div>
</div>
</form>