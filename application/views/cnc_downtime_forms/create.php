<div class="page-breadcrumb bg-danger text-white">
	<div class="row align-items-center">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title">Register Downtime</h4>
		</div>
		<!--
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<div class="d-md-flex">
				<ol class="breadcrumb ms-auto">
					<li><a href="#" class="fw-normal">Status de pedidos.</a></li>
				</ol>
				<a href="<?php echo base_url() ?>request_mold" target=""
				   class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">
					Pedir Insertos
				</a>
			</div>
		</div>
		-->
	</div>
	<!-- /.col-lg-12 -->
</div>




<div id="pendingdiv" class="container-fluid">
	<!-- ============================================================== -->
	<!-- Three charts -->
	<!-- ============================================================== -->
	<div class="row justify-content-center">

		<div class="col-lg-12">
			<div class="white-box analytics-info">
				<h3 class="box-title">CNC Downtime Registry</h3>

				<?php echo form_open( base_url() . 'downtime_form/' . $cnc)?>

				<input type="hidden" name="machine" value="<?= $cnc ?>">

				<div class="row mt-5">


					<div class="col-3">
						<label for="">From</label>
						<input id="start-time" name="start" type="datetime-local" class="form-control" required>
					</div>
					<div class="col-3">
						<label for="">To</label>
						<input id="end-time"  name="end" type="datetime-local" class="form-control" required>
					</div>

					<div class="col-3">
						<label for="">Reason for downtime</label>
						<input   name="reason" type="text" class="form-control" required>
					</div>


					<div class="col-12 mt-5">
						<input type="submit" class="btn btn-outline-danger" value="Save Downtime">
					</div>

				</div>
				<?php echo form_close()?>
			</div>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

