<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
    <link href="<?php echo base_url('assets/bootstrap/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/main.js');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<body>
<div class="navbar navbar-dark bg-dark">
    <div class="container" >
        <a href="#" class="navbar-brand">REGISTER</a>
    </div>
</div>

<div class="container">
     <form name="createUser" action="<?php echo site_url('user/registration');?>" method="post">
    <div class="row">
       
        <div class="col-md-12">
            <div class="form-group">
                <label >Last Name</label>
                <input type="text" name="lastname" value="" class="form-control">
                <?php echo form_error('lastname'); ?>
            </div>
            <div class="form-group">
                <label >First Name</label>
                <input type="text" name="firstname" value="" class="form-control">
                <?php echo form_error('firstname'); ?>
            </div>
            <div class="form-group">
                <label >Address</label>
                <input type="text" name="address" value="" class="form-control">
                <?php echo form_error('address'); ?>
            </div>
            <div class="form-group">
              <label>Bloodtype</label>
              <input type="text" name="bloodtype" value="" class="form-control" list="bloodtype" />
              <datalist id="bloodtype">
                <option value="A"></option>
                <option value="B"></option>
                <option value="AB"></option>
                <option value="O"></option>
                <option value="A+"></option>
                <option value="A-"></option>
                <option value="B+"></option>
                <option value="B-"></option>
                <option value="AB+"></option>
                <option value="AB-"></option>
                <option value="O+"></option>
                <option value="O-"></option>
              </datalist>
              <span class="text-danger"></span>
            </div>
            <div class="form-group">
              <div class="modal-footer">
              <a href='<?php echo base_url();?>user/manage()' class="btn btn-danger btn-md"> Go Back</a>
              <input type="submit" name="insert" value="Add" class="btn btn-primary">
                </div>
                
            </div>
        </div>
    </div>
        </form>
    </div>
</div>

















    
</body>
<script src="<?php echo base_url('assets/bootstrap/bootstrap/css/bootstrap.min.css');?>"></script>
<script src="<?php echo base_url('assets/jquery.js');?>"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/0281c368fb.js" crossorigin="anonymous"></script>
</html>