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



<div style="margin-bottom: -350px" class="container-fluid">
	<!-- ============================================================== -->
	<!-- Three charts -->
	<!-- ============================================================== -->
	<div class="row justify-content-center">

		<div class="col-lg-12">
			<div class="white-box analytics-info">
				<h3 class="box-title">Busqueda</h3>

				<?php echo form_open('reports/index', array('class' => 'form-horizontal')); ?>
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

				<h3 class="box-title">OverAll</h3>

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
								echo $percent =  round(($totals['quantity']/$totals['goal'])*100, 2);
								?>
								%
							</div>
							<div class="col-lg-6">
								<?php
								if($percent >= 99){
									echo "<img src='".base_url()."assets/img/yay.gif' width='100'>";
								}
								?>
							</div>
						</div>


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
								<td><?php echo $record['end'] ?></td>
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
<script>
	$('#entries-list').DataTable({
		'scrollX': true,
		'bSort': false
		//'scrollCollapse': true,
	});
</script>




<script>
	(function reloadfun() {
		$.ajax({
			url: '<?php echo base_url() ?>pages/view',
			success: function(data) {
				$("#pendingdiv").load(location.href+" #pendingdiv>*","");//logged_in
			},
			complete: function() {
				// Siguiente peticion de ajax cuando la actual este terminada
				setTimeout(reloadfun, 300000);

			}
		});
	})();
</script>
