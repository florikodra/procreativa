<?php
?>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h1 class="m-0 font-weight-bold text-primary">Machines</h1><br>
		<a href="#" class="btn btn-success btn-icon-split" data-target="#addModal" data-toggle="modal"><span class="icon text-white-50"><i class="fas fa-plus-circle"></i></span><span class="text">Add New Machine</span></a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
				<tr>
					<th>Order</th>
					<th>Title</th>
					<th>Code</th>
					<th>Serial Number</th>
					<th>Quantity</th>
					<th>Image</th>
					<th>Actions</th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<th>Order</th>
					<th>Title</th>
					<th>Code</th>
					<th>Serial Number</th>
					<th>Quantity</th>
					<th>Image</th>
					<th>Actions</th>
				</tr>
				</tfoot>
				<tbody>

				<?php
				$i=1;
				if(is_array($all_data) || is_object($all_data)){
					foreach($all_data as $row)
					{?>
						<tr>
							<td><?php echo $i?></td>
							<td><?php echo $row->machine_title?></td>
							<td><?php echo $row->machine_title ?></td>
							<td><?php echo $row->machine_sn ?></td>
							<td><?php echo $row->machine_quantity?></td>
							<td><?php echo $row->machine_image?></td>
							<td><a href="#" class="btn btn-primary btn-icon-split btn-sm"><span class="icon text-white-50"><i class="fas fa-pen"></i></span><span class="text">Edit</span></a> <a href="#" class="btn btn-danger btn-icon-split btn-sm"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Delete</span></a></td>
						</tr>

						<?php
						$i++;
					}}
				?>
				</tr>

				</tbody>
			</table>
		</div>
	</div>
</div>
