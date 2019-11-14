<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_two();
?>
<a type="button" href="add_new_image.php" class="btn btn-success btn-block">Ajouter une image</a>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Nom de l'image</th>
								  <th>Image</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
						  <tbody>
						  <?php
								include("includes/connection.php");
								$con=mysqli_connect("localhost","root","123456","phl");
								$result = mysqli_query($con,"SELECT * FROM tblimage ");
								

							while ($row=mysqli_fetch_array($result))
							{ ?><!--open of while -->
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['txtimagename']; ?></td>
								<td><img src="<?php echo "uploads/".$row['path']; ?>" style="width:150px;height:150px;"></td>
								<td class="center">
									<a class="btn btn-info" href="edit_data.php?uID=<?php echo $row['id']; ?>">
										<i class="halflings-icon white icon-th-large"></i>  
									</a>
									<a class="btn btn-danger" onclick="return confirmDel()" href="delete_data.php?delID=<?php echo $row['id'];?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php
							   } //close of while
							?>
						  </tbody>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->