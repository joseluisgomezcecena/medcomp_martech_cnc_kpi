<div class="page-breadcrumb bg-white">
	<div class="row align-items-center">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title">Parts Configuration</h4>
		</div>
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<div class="d-md-flex">
				<ol class="breadcrumb ms-auto">
					<li><a href="#" class="fw-normal">Configure parts.</a></li>
				</ol>
			</div>
		</div>
	</div>
</div>



<div class="page-breadcrumb">
	<div class="row align-items-center">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title"><a href="<?php echo base_url() ?>config/parts/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Parts</a></h4>
		</div>
	</div>
</div>



<div style="margin-top: 50px" class="container-fluid">
	<!-- ============================================================== -->
	<!-- Three charts -->
	<!-- ============================================================== -->
	<div class="row justify-content-center">

		<div class="col-lg-12">
			<div class="white-box analytics-info">

				<h3 class="box-title">Validated Parts</h3>

				<?php if($this->session->flashdata('updated')): ?>

					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong class="uppercase"><bdi>Success!</bdi></strong>
						Your changes have been saved, thank you.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

					</div>

				<?php endif; ?>

				<?php if($this->session->flashdata('deleted')): ?>

					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong class="uppercase"><bdi>Success!</bdi></strong>
						Your data has been deleted.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

					</div>

				<?php endif; ?>


				<div class="table-responsive">

					<table style="width: 100%" id="entries-list" class="table table-hover">
						<thead>
						<th>Part</th>
						<th>Description</th>
						<th>Machine</th>
						<th>PPH</th>
						<th>Actions</th>
						</thead>
						<tbody>
						<?php foreach ($parts as $part) : ?>

							<tr>
								<td><?php echo $part['COL1'] ?></td>
								<td><?php echo $part['COL2'] ?></td>
								<td><?php echo $part['COL9'] ?></td>
								<td><?php echo $part['COL4'] ?></td>
								<td>
									<a href="<?php echo base_url() ?>config/parts/edit/<?php echo $part['id'] ?>" class="btn btn-primary text-black-50">Edit&nbsp;<i class="fa fa-pencil-alt text-white"></i></a>
									<a href="<?php echo base_url() ?>config/parts/delete/<?php echo $part['id'] ?>" class="btn btn-danger text-black-50">Delete&nbsp;<i class="fa fa-trash-alt text-white"></i></a>
								</td>
							</tr>

						<?php endforeach; ?>
						</tbody>

					</table>
				</div>




			</div>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>


<script>
	/*
	$('#entries-list').DataTable({
		'scrollX': true,
		'bSort': false,
		//'scrollCollapse': true,
		buttons: [
			'copyHtml5',
			'excelHtml5',
			'csvHtml5',
			'pdfHtml5'
		]
	});
	 */

	$('#entries-list').DataTable( {
		dom: 'Bfrtip',
		'bSort': false,
		buttons: [
			'copyHtml5',
			'excelHtml5',
			'csvHtml5',
			'pdfHtml5'
		]
	} );


	$('#downtime-list').DataTable( {
		dom: 'Bfrtip',
		'bSort': false,
		buttons: [
			'copyHtml5',
			'excelHtml5',
			'csvHtml5',
			'pdfHtml5'
		]
	} );

</script>





