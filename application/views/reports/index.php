<div class="page-breadcrumb bg-white">
	<div class="row align-items-center">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title">Production Reports</h4>
		</div>
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<div class="d-md-flex">
				<ol class="breadcrumb ms-auto">
					<li><a href="#" class="fw-normal">Production Reports</a></li>
				</ol>
			</div>
		</div>
	</div>
	<!-- /.col-lg-12 -->
</div>



<div style="margin-bottom: 200px;" class="container-fluid">
	<!-- ============================================================== -->
	<!-- Three charts -->
	<!-- ============================================================== -->
	<div class="row justify-content-center">

		<div class="col-lg-12">
			<?php if($show == true): ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong class="uppercase"><bdi>IMPORTANT!</bdi></strong>
				If no date range is selected, the report will show all records for Today <?php echo date("m/d/Y") ?> only.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

			</div>
			<?php endif; ?>

			<div class="white-box analytics-info">
				<h3 class="box-title">Search </h3>
				<?php echo form_open( base_url() . 'reports/index', array('class' => 'form-horizontal')); ?>
				<div class="row">
					<div class="col-lg-4">
						<div class="form-group">
							<label class="col-sm-12">Start Date</label>
							<div class="col-sm-12">
								<input type="date" class="form-control" id="datepicker" name="date_start" placeholder="Fecha de inicio" value="">
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<label class="col-sm-12">End Date</label>
							<div class="col-sm-12">
								<input type="date" class="form-control" id="datepicker" name="date_end" placeholder="Fecha de inicio" value="">
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<label class="col-sm-12">Click To Search</label>
							<div class="col-sm-12">
								<button class="btn btn-primary" type="submit" name="search"><i class="fa fa-search"></i> Search</button>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>




<div style="margin-top: -450px" class="container-fluid">
	<!-- ============================================================== -->
	<!-- Three charts -->
	<!-- ============================================================== -->
	<div class="row justify-content-center">

		<div class="col-lg-12">
			<div class="white-box analytics-info">

				<h3 class="box-title">OverAll Production</h3>

				<div class="row mb-5">
					<div class="col-lg-3">
						<h3 class="box-title text-primary">Goal</h3>
						<?php
						echo $totals['goal'];
						?>
					</div>

					<div class="col-lg-3">
						<h3 class="box-title text-primary">Produced</h3>
						<?php
						echo $totals['quantity'];
						?>
					</div>

					<div class="col-lg-3">
						<h3 class="box-title text-primary">Goal vs Produced</h3>
						<div class="row">
							<div class="col-lg-6">
								<?php
								if($totals['goal']== 0)
								{
									echo $percent = 0;
								}else
								{
									echo $percent =  round(($totals['quantity']/$totals['goal'])*100, 2);
								}
								?>
								%
							</div>
							<div class="col-lg-6">
								<?php
								if($percent >= 99){
									echo "<img style='margin-top:-55px;' src='".base_url()."assets/img/yay.gif' width='100'>";
								}
								?>
							</div>
						</div>

					</div>


					<div class="col-lg-3">
						<h3 class="box-title text-primary">Machine % Usage</h3>
						<?php
							//echo $totals['quantity'];

							if($downtime_total== 0)
							{
								echo "N/A";
							}
							else
							{
								echo $total_usage . "-" . $downtime_total;
								echo "/";
								echo $total_usage;
								echo " = ";
								echo round((($total_usage - $downtime_total)/$total_usage)*100, 2) . "%";
							}
						?>

					</div>

				</div>





				<h3 class="box-title">Production Records</h3>

				<div class="table-responsive">

					<table style="width: 100%" id="entries-list" class="table">
						<thead>
						<th>Machine</th>
						<th>Part</th>
						<th>Quantity</th>
						<th>Goal</th>
						<th>Started</th>
						<th>Ended</th>
						</thead>
						<tbody>
						<?php
						foreach ($records as $record):
							?>

							<tr>
								<td><?php echo $record['machine'] ?></td>
								<td><?php echo $record['part'] ?></td>
								<td><?php echo $record['quantity'] ?></td>
								<td><?php echo $record['goal'] ?></td>
								<td><?php echo $record['start'] ?></td>
								<td>
									<?php echo $record['end'] ?>&nbsp;
									<a href="<?php echo base_url() ?>config/records/edit/<?php echo $record['id'] ?>">Edit</a>&nbsp;
									<a href="<?php echo base_url() ?>config/records/delete/<?php echo $record['id'] ?>">Delete</a>
								</td>
							</tr>

						<?php endforeach; ?>
						</tbody>

					</table>
				</div>







				<h3 class="box-title mb-5">Downtime Records</h3>

				<div class="table-responsive">

					<table style="width: 100%" id="downtime-list" class="table">
						<thead>
						<th>Machine</th>
						<th>Started</th>
						<th>Ended</th>
						<th>Hours</th>
						<th>Reason</th>
						</thead>
						<tbody>
						<?php
						foreach ($downtime_records as $drecord):
							?>

							<tr>
								<td><?php echo $drecord['machine_downtime'] ?></td>
								<td><?php echo $drecord['downtime_start'] ?></td>
								<td><?php echo $drecord['downtime_end'] ?></td>
								<td>
									<?php
									$start = strtotime($drecord['downtime_start']);
									$end = strtotime($drecord['downtime_end']);
									$diff = $end - $start;
									$hours = $diff / ( 60 * 60 );
									echo round($hours, 2);
									?>
								</td>
								<td>
									<?php echo $drecord['downtime_reason'] ?>&nbsp;
									<a href="<?php echo base_url() ?>config/downtime_records/edit/<?php echo $drecord['downtime_id'] ?>">Edit</a>&nbsp;
									<a href="<?php echo base_url() ?>config/downtime_records/delete/<?php echo $drecord['downtime_id'] ?>">Delete</a>
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





