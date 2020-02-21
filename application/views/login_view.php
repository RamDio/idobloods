<?php include_once "include/header.php";?>



 
 <div class="container" align="center" id="forms" >
 <div class="col-xs-1 center-block">
  <div class="col-md-4 col-md-offset-4">
    <form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
      <h2 class="form-signin-heading">Please sign in</h2>
      <p class="error"><?php echo $this->session->flashdata('msg');?></p>
      <label for="username" class="sr-only">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br>
      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
  </div>
  </div>
  </div> <!-- /container -->



<?php include_once "include/footer.php";?>
    
