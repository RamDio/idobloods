<?php include_once "include/sidenav.php";?>
<div class="main-content">
    <a href="<?php echo site_url("user/registration"); ?>" class="btn btn-primary">+ ADD DONOR</a>

<div align="center">
	<p class="success"><?php echo $this->session->flashdata('message');?></p>
	<h3>View users</h3>

	<hr>
	<div class="row">
		<div class="col-md-12">
			<div class="">
			<table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0"
  width="100%">
  				<thead>
				<tr>
					<th>ID</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Address</th>
					<th>BloodType</th>
					<th>Date Registered</th>
					<th>Actions</th>
				</tr>
				</thead>

				<?php  if(!empty($users)) { foreach($users as $user) {?>
					<tbody>
						<tr>
							<td><?php echo $user['id'] ?></td>
							<td><?php echo $user['lastname'] ?></td>
							<td><?php echo $user['firstname'] ?></td>
							<td><?php echo $user['address'] ?></td>
							<td><?php echo $user['bloodtype'] ?></td>
							<td><?php echo $user['created_at'] ?></td>
							<td >
								<a href="<?php echo base_url().'index.php/user/edit'.$user['id']?> " class="btn btn-primary">Edit</a>
								<a href="<?php echo base_url().'index.php/user/delete'.$user['id']?> " class="btn btn-danger">Delete</a>
							</td>
						</tr>
					</tbody>
				<?php	}
				}else{?>
					<tr>
						<td colspan="5"> Records not found</td>
					</tr>
				<?php }?>
				
				
			</table>
			
		</div>
			
		</div>
		
	</div>
</div>

</div>
<script>
	$(document).ready(function () {
$('#dtVerticalScrollExample').DataTable({
"scrollY": "200px",
"scrollCollapse": true,
});
$('.dataTables_length').addClass('bs-select');
});

</script>

<script src="<?php echo base_url('assets/style.js');?>"></script>





<?php include_once "include/footer.php";?>