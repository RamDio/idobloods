
  <?php include_once "include/sidenav.php";?>
    <div class="main-content">
        <div class="container">
          <h1>Welcome Back <?php echo $this->session->userdata('username');?></h1>
          <ul>
          <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
       
          </ul>
        </div>
        <div class="title">
				DASHBOARD
			</div>
			<div class="main">
				<div class="widget">
					<div class="title">Number of App User</div>
					<div class="chart"></div>
				</div>
				<div class="widget">
					<div class="title">Number of blood stock</div>
					<div class="chart">
						
					</div>
				</div>
				<!-- <div class="widget">
					<div class="title">Number of comments</div>
					<div class="chart"></div>
				</div> -->
			</div>
      </div>

    <?php include_once "include/footer.php";?>