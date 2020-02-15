<?php include_once "include/header.php";?>
</head>


<body>

<div class="container">
<br><br><br>

<form method="post" action="<?php echo base_url(); ?>login/validation">

                    <div class="form-group">
                        <label for=""> Enter Username</label>
                        <input type="text" name="username" class="form-control" />
                        
                    </div>
                    <div class="form-group">
                        <label for=""> Enter Password</label>
                        <input type="password" name="password" class="form-control" />
           
                    </div>
                    <div class="form-group" >
                        <input type="submit" name="insert" value="Login" class="btn btn-primary" />
                        <?php 
                        echo $this->session->flashdata('error');
                        
                        ?>
                    </div>

</form>
</div>
<?php include_once "include/footer.php";?>
    
